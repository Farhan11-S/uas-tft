<?php
// Include the database connection file
require_once 'main.php';
require_once 'helper.php';

function listCompByUserID($conn, $userID)
{

    $sql = "
SELECT
    c.id AS comp_id,
    c.title AS comp_title,
    champ.id AS champion_id,
    champ.name AS champion_name,
    champ.api_name AS champion_api_name,
    champ.cost AS champion_cost,
    champ.image_url AS champion_image_url,
    t.id AS trait_id,
    t.name AS trait_name,
    t.min_units AS trait_min_units,
    t.max_units AS trait_max_units,
    t.image_url AS trait_image_url
FROM
    comps c
    LEFT JOIN comp_champion_details ccd ON c.id = ccd.id_comp
    LEFT JOIN champions champ ON ccd.id_champion = champ.id
    LEFT JOIN champion_traits ct ON champ.id = ct.champion_id
    LEFT JOIN traits t ON ct.trait_id = t.id
WHERE
    c.created_by = ?
ORDER BY
    c.id, champ.id, t.id;
";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $userID);
    $stmt->execute();
    $result = $stmt->get_result();

    $comps = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $compId = $row['comp_id'];
            $championId = $row['champion_id'];
            $traitId = $row['trait_id'];

            if (!isset($comps[$compId])) {
                $comps[$compId] = [
                    'id' => $compId,
                    'title' => $row['comp_title'],
                    'champions' => []
                ];
            }

            if (!isset($comps[$compId]['champions'][$championId])) {
                $comps[$compId]['champions'][$championId] = [
                    'id' => $championId,
                    'name' => $row['champion_name'],
                    'api_name' => $row['champion_api_name'],
                    'cost' => $row['champion_cost'],
                    'image_url' => $row['champion_image_url'],
                    'traits' => []
                ];
            }

            if ($traitId) {
                $comps[$compId]['champions'][$championId]['traits'][] = [
                    'id' => $traitId,
                    'name' => $row['trait_name'],
                    'min_units' => $row['trait_min_units'],
                    'max_units' => $row['trait_max_units'],
                    'image_url' => $row['trait_image_url']
                ];
            }
        }
    }

    $stmt->close();
    $conn->close();
    return $comps;
}

function detailComp($conn, $id)
{
    $query = "SELECT * FROM comps WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    $message = messageBuilder('Failed to get detail comp', [], 0);

    // Check if the user exists
    if ($result->num_rows > 0) {
        $message = messageBuilder('Success get detail comp', $result->fetch_assoc());
    }

    $stmt->close();
    $conn->close();
    return $message;
}

function storeComp($conn, $data)
{
    $query = "INSERT INTO comps (title, created_by) VALUES (?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ss", $data['title'], $data['created_by']);
    $stmt->execute();

    if (!$stmt->execute()) {
        return messageBuilder($stmt->error, [], 0);
    }

    $stmt->close();
    $conn->close();
    return messageBuilder('Register Success', [], 1);
}
