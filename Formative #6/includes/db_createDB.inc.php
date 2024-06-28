<?php

require_once "db_connect.inc.php";

$db_name = "db_dogs";

try {

    $conn = new PDO("mysql:host=$server_name", $db_username, $db_password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $statement = $conn->query("SELECT COUNT(*) FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = '$db_name'");
    if($statement->fetchColumn() == 0) {

        $create_db = "CREATE DATABASE $db_name";
        $conn->exec($create_db);

    } else { }

} catch (PDOException $e) {
    
    echo "Creation failed: " . $e->getMessage();

}

$conn = null;