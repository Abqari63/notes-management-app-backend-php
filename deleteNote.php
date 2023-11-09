<?php
    header('Access-Control-Allow-Origin: http://localhost:3000');
    header('Access-Control-Allow-Methods: GET,POST');
    header('Access-Control-Allow-Headers: Content-Type');

    if ($_SERVER["REQUEST_METHOD"] == 'POST') {

        try {    
            //connecting to database
            $serverName = "localhost";
            $userName = "root";
            $password = "";
            $dbName = "user";
            $tableName = "notes";
            $conn = mysqli_connect($serverName, $userName, $password, $dbName);
            
        }
        catch(mysqli_sql_exception $e) {
            echo json_encode("Some error occurred...!");
        }

        try {

            $data = json_decode(file_get_contents('php://input'), true);
            $id = $data['deleteNoteID'];

            $sql = "DELETE FROM `$tableName` WHERE `S.No` = $id";
            $result = mysqli_query($conn, $sql);
            echo json_encode('Note is deleted successfully...!');
        }
        catch(mysqli_sql_exception $e) {
            echo json_encode("Failed to delete note...!" . $e->getMessage());
        }
        mysqli_close($conn);
    }
?>