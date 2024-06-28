<?php

require_once "db_connect.inc.php";

$db_name = "db_dogs";
$db_table = "dogs";

try {

    $conn = new PDO("mysql:host=$server_name;dbname=$db_name", $db_username, $db_password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $statement = $conn->query("SHOW TABLES LIKE '$db_table'");
    if ($statement->rowCount() == 0) {
        
        $dogs_table = "CREATE TABLE $db_table (
            id INT(4) NOT NULL AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(25) NOT NULL,
            breed VARCHAR(25) NOT NULL,
            age INT(3) NOT NULL,
            address VARCHAR(100) NOT NULL,
            color VARCHAR(20) NOT NULL,
            height INT(3) NOT NULL,
            weight INT(3) NOT NULL,
            added_date TIMESTAMP
        )";

        $conn->exec($dogs_table);

    } else {}

} catch (PDOException $e){

    echo "Creation failed: " . $e->getMessage();

}

$conn = null;