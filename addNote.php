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

            $noteTitle = $_POST['title'];
            $noteDesc = $_POST['desc'];      

            //inserting data to database
            $sql = "INSERT INTO `$tableName` (`S.No`, `Title`, `Description`) VALUES (NULL, '$noteTitle', '$noteDesc')";
            $result = mysqli_query($conn, $sql);
            echo json_encode("Note Added...!");
            
        }
        catch(mysqli_sql_exception $e) {
            echo json_encode("Note is not added, Some database error occurred...!". $e->getMessage());
        }
    }
?>