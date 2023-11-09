<?php
    header('Access-Control-Allow-Origin: http://localhost:3000');
    header('Access-Control-Allow-Methods: GET,POST');
    header('Access-Control-Allow-Headers: Content-Type');

    if ($_SERVER["REQUEST_METHOD"] == 'GET') {

        try {    
            //connecting to database
            $serverName = "localhost";
            $userName = "root";
            $password = "";
            $dbName = "user";
            $tableName = "notes";
            $conn = mysqli_connect($serverName, $userName, $password, $dbName);

            //fetching data from database
            $sql = "SELECT * FROM $tableName";
            $result = mysqli_query($conn, $sql);
            $response = mysqli_fetch_all($result);
            echo json_encode($response);
            mysqli_close($conn);
            
        }
        catch(mysqli_sql_exception $e) {
            echo json_encode("Some database error Occurred Data is not being fetched...!");
        }
    }
?>