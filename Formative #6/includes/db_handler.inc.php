<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $breed = $_POST["breed"];
    $age = $_POST["age"];
    $address = $_POST["address"];
    $color = $_POST["color"];
    $height = $_POST["height"];
    $weight = $_POST["weight"];

    try {

        require_once "db_connectData.inc.php";

        $query = "INSERT INTO  dogs (name, breed, age, address, color, height, weight) VALUES (:name, :breed, :age, :address, :color, :height, :weight)";

        $statement = $conn->prepare($query);

        $statement->bindParam(":name", $name);
        $statement->bindParam(":breed", $breed);
        $statement->bindParam(":age", $age);
        $statement->bindParam(":address", $address);
        $statement->bindParam(":color", $color);
        $statement->bindParam(":height", $height);
        $statement->bindParam(":weight", $weight);

        $statement->execute();

        $conn = null;
        $statement = null;

        header("Location: ../DogRegister.php");

        die();

    } catch (PDOException $e) {

        die("Query failed: " . $e->getMessage());

    }

} else {

    header("Location: ../DogRegister.php");

}