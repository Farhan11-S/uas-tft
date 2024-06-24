<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
// Include the database connection file
require_once 'main.php';
require_once 'helper.php';

function getCompsWithChampionsAndTraits($conn, $userId)
{
    // Query to get comps with champions
    $sql = "
        SELECT 
            c.id as comp_id,
            c.title as comp_title,
            ch.id as champion_id,
            ch.api_name as champion_api_name,
            ch.name as champion_name,
            ch.cost as champion_cost,
            ch.image_url as champion_image_url
        FROM comps c
        LEFT JOIN comp_champion_details ccd ON c.id = ccd.id_comp
        LEFT JOIN champions ch ON ccd.id_champion = ch.id
        WHERE c.created_by = $userId
        ORDER BY c.id, ch.id
    ";

    $result = $conn->query($sql);

    $comps = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $compId = $row['comp_id'];
            $championId = $row['champion_id'];

            if (!isset($comps[$compId])) {
                $comps[$compId] = [
                    'title' => $row['comp_title'],
                    'champions' => []
                ];
            }

            if (!isset($comps[$compId]['champions'][$championId])) {
                $comps[$compId]['champions'][$championId] = [
                    'api_name' => $row['champion_api_name'],
                    'name' => $row['champion_name'],
                    'cost' => $row['champion_cost'],
                    'image_url' => $row['champion_image_url'],
                ];
            }
        }
    }

    // Query to get comps with champions
    $sql = "
    SELECT 
        c.id as comp_id,
        c.title as comp_title,
        t.id as trait_id,
        t.name as trait_name,
        t.image_url as trait_image_url,
        ctd.value as trait_value
    FROM comps c
    LEFT JOIN comp_trait_details ctd ON c.id = ctd.id_comp
    LEFT JOIN traits t ON ctd.id_trait = t.id
    WHERE c.created_by = $userId
    ORDER BY c.id, ctd.value DESC
    ";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $compId = $row['comp_id'];
            $traitId = $row['trait_id'];

            if (!isset($comps[$compId])) {
                $comps[$compId] = [
                    'title' => $row['comp_title'],
                    'traits' => []
                ];
            }

            if (!isset($comps[$compId]['traits'][$traitId])) {
                $comps[$compId]['traits'][$traitId] = [
                    'name' => $row['trait_name'],
                    'image_url' => $row['trait_image_url'],
                    'value' => $row['trait_value'],
                ];
            }
        }
    }

    $conn->close();

    return $comps;
}

function getChampionsWithTraits($conn, $championIds = [])
{
    // Sanitize input
    if (!empty($championIds)) $championIds = implode(',', array_map('intval', $championIds));

    // Query to get champions with traits
    $sql = "
        SELECT 
            c.id as champion_id, 
            c.api_name, 
            c.name as champion_name, 
            c.cost, 
            c.image_url as champion_image_url,
            t.id as trait_id,
            t.name as trait_name,
            t.min_units,
            t.max_units,
            t.image_url as trait_image_url
        FROM champions c
        LEFT JOIN champion_traits ct ON c.id = ct.champion_id
        LEFT JOIN traits t ON ct.trait_id = t.id
    ";

    if (!empty($championIds)) $sql = $sql . " WHERE c.id IN ($championIds)";

    $result = $conn->query($sql);

    $champions = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $champions[$row['champion_id']]['details'] = [
                'api_name' => $row['api_name'],
                'name' => $row['champion_name'],
                'cost' => $row['cost'],
                'image_url' => $row['champion_image_url']
            ];
            $champions[$row['champion_id']]['traits'][] = [
                'id' => $row['trait_id'],
                'name' => $row['trait_name'],
                'min_units' => $row['min_units'],
                'max_units' => $row['max_units'],
                'image_url' => $row['trait_image_url']
            ];
        }
    }

    // $conn->close();

    return $champions;
}

function storeComp($conn, $championIds, $compTitle, $compCreatedBy)
{
    // Start transaction
    $conn->begin_transaction();

    try {
        // Insert into comps
        $stmt = $conn->prepare("INSERT INTO comps (title, created_by) VALUES (?, ?)");
        $stmt->bind_param("si", $compTitle, $compCreatedBy);
        $stmt->execute();
        $compId = $stmt->insert_id;
        $stmt->close();

        // Insert into comp_champion_details and comp_trait_details
        $champions = getChampionsWithTraits($conn, $championIds);

        $traitCounts = [];
        foreach ($champions as $championId => $championData) {
            // Insert into comp_champion_details
            $stmt = $conn->prepare("INSERT INTO comp_champion_details (id_champion, id_comp) VALUES (?, ?)");
            $stmt->bind_param("ii", $championId, $compId);
            $stmt->execute();
            $stmt->close();

            // Count traits
            foreach ($championData['traits'] as $trait) {
                if (!isset($traitCounts[$trait['id']])) {
                    $traitCounts[$trait['id']] = 0;
                }
                $traitCounts[$trait['id']]++;
            }
        }

        // Insert into comp_trait_details
        foreach ($traitCounts as $traitId => $count) {
            $stmt = $conn->prepare("INSERT INTO comp_trait_details (id_trait, id_comp, value) VALUES (?, ?, ?)");
            $stmt->bind_param("iii", $traitId, $compId, $count);
            $stmt->execute();
            $stmt->close();
        }

        // Commit transaction
        $conn->commit();
    } catch (Exception $e) {
        // Rollback transaction on error
        $conn->rollback();
        throw $e;
    }

    // $conn->close();
}

function deleteComp($conn, $idComp)
{
    $conn->query("DELETE FROM comps WHERE id = '$idComp'");
}

if (isset($_POST['store'])) {
    $idChampions = $_POST['id_champions'];
    $compTitle = $_POST['title'];

    storeComp($conn, $idChampions, $compTitle, $_SESSION['id']);

    header("location:../comps.php");
}

if (isset($_POST['delete'])) {
    $idComp = $_POST['id_comp'];

    deleteComp($conn, $idComp);

    header("location:../comps.php");
}
