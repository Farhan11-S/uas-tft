<?php
// Include the database connection file
require_once 'main.php';
require_once 'helper.php';

function listComp($conn)
{
    // Prepare the query
    $query = "SELECT * FROM comps";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $result = $stmt->get_result();

    $message = messageBuilder('Failed to get data comps', [], 0);

    if ($result->num_rows > 0) {
        $message = messageBuilder('Success get data comps', $result->fetch_all(MYSQLI_ASSOC));
    }

    return $message;
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

    return messageBuilder('Register Success', [], 1);
}

header('Content-Type: application/json; charset=utf-8');
echo storeComp($conn, [
    'title' => 'test 2',
    'created_by' => 4
]);
