<?php

    require_once 'includes/db_createDB.inc.php';
    require_once 'includes/db_createTable.inc.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <title> Dog Register </title>
    <style>

        html {
            height: 100%;
            overflow: hidden;
            background: linear-gradient(rgba(196, 102, 0, 0.6), rgba(155, 89, 182, 0.6));
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            font-family: Montserrat;
        }

        form {
            width: 400px;
            background-color: white;
            box-shadow: 0 0 10px 3px gray;
            border-radius: 10px;
            padding: 20px;
        }

        .textBox {
            font-family: Montserrat;
            border: 1px solid #ccc;
            margin: 5px;
            padding: 5px;
            display: table-cell;
        }

        userInput {
            display: table-row;
        }

        label {
            display: table-cell;
            padding-right: 10px;
            text-align: left;
        }

        .saveButton {
            font-family: Montserrat;
            background: #27AE60;
            color: white;
            font-weight: bold;
            width: 100px;
            border: 0 none;
            border-radius: 1px;
            cursor: pointer;
            padding: 5px;
            margin: 10px 5px;
        }

        .saveButton:hover, .saveButton:focus {
            box-shadow: 0 0 0 2px white, 0 0 0 3px #27AE60;
        }

    </style>
</head>

<body>
    <center>
        <form action="includes/db_handler.inc.php" method="post">
            
            <h2> Dog Information </h2>
            
            <userInput>
                <label> Name: </label>
                <input type="text" name="name" class="textBox" required><br>
            </userInput>

            <userInput>
                <label> Breed: </label>
                <input type="text" name="breed" class="textBox" required><br>
            </userInput>

            <userInput>
                <label> Age: </label>
                <input type="text" name="age" class="textBox" required><br>
            </userInput>

            <userInput>
                <label> Address: </label>
                <input type="text" name="address" class="textBox" required><br>
            </userInput>

            <userInput>
                <label> Color: </label>
                <input type="text" name="color" class="textBox" required><br>
            </userInput>

            <userInput>
                <label> Height (in ft): </label>
                <input type="text" name="height" class="textBox" required><br>
            </userInput>

            <userInput>
                <label> Weight (in kg): </label>
                <input type="text" name="weight" class="textBox" required><br>
            </userInput>

            <input type="submit" value="Save" class="saveButton">

        </form>
    </center>
</body>
</html>