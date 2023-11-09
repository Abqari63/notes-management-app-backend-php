<?php
header('Access-Control-Allow-Origin: http://localhost:3000');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: Content-Type');

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    try {
        // Connecting to the database
        $serverName = "localhost";
        $userName = "root";
        $password = "";
        $dbName = "user";
        $tableName = "notes";
        $conn = mysqli_connect($serverName, $userName, $password, $dbName);
    } catch (mysqli_sql_exception $e) {
        echo json_encode("Some error occurred...!");
    }

    try {
        // User details
        $noteID = $_POST['id'];
        $noteTitle = $_POST['title'];
        $noteDesc = $_POST['desc'];

        // Updating data in the database
        $sql = "UPDATE `notes` SET `Title`='$noteTitle', `Description`='$noteDesc' WHERE `S.No`=$noteID";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            echo json_encode("Note Updated...!");
        } else {
            echo json_encode("Note is not updated...!");
        }
    } catch (mysqli_sql_exception $e) {
        echo json_encode("Note is not updated, database error...! " . $e->getMessage());
    }
}
?>
