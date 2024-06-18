<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title> POST Method </title>

    <style>
        html {
            font-family: Montserrat;
            font-size: 20px;
            height: 100%;
            background: linear-gradient(0deg, rgba(6,3,92,1), rgba(0,161,255,1));
            overflow: hidden;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            margin: 0;
        }

        form, container {
            background: white;
            padding: 40px;
            margin: 2rem;
            display: table;
            border-radius: 3px;
            box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
        }

        form {
            width: 450px;
            text-align: center;
        }

        .submit {
            font-family: Montserrat;
            font-size: 18px;
            background: #27AE60;
            color: white;
            font-weight: bold;
            width: 100px;
            border: 0 none;
            border-radius: 1px;
            cursor: pointer;
            padding: 10px;
            margin: 10px 5px;
            text-decoration: none;
        }

        .submit:hover, .submit:focus {
            box-shadow: 0 0 0 2px white, 0 0 0 3px #27AE60;
        }

        p {
            display: table-row;
        }

        input[type="text"] {
            font-family: Montserrat;
            margin: 10px;
            font-size: 20px;
            padding-right: 20px;
            padding: 15px;
            border: 1px solid #ccc;
            width: 80%;
        }

        data, label {
            padding: 10px;
            display: table-cell;
        }

        label {
            padding-right: 25px;
        }
    </style>

</head>

<body>
    <?php
        if (!isset($_POST['firstName'])) {
    ?>

    <form action="<?php $_PHP_SELF ?>" method="post">
        <input type="text" name="firstName" placeholder="First Name" required><br>

        <input type="text" name="middleName" placeholder="Middle Name"><br>

        <input type="text" name="lastName" placeholder="Last Name" required><br>

        <input type="text" name="dateOfBirth" placeholder="Date of Birth" required><br>

        <input type="text" name="address" placeholder="Address" required><br>

        <input type="submit" class="submit">
    </form>

    <?php
        } else {
            echo "<container>";

                echo "<p>";
                    echo "<label> First Name: </label>";
                    echo "<data>"; echo $_POST["firstName"]; echo "</data><br>";
                echo "</p>";

                echo "<p>";
                    echo "<label> Middle Name: </label>";
                    echo "<data>"; echo $_POST["middleName"]; echo "</data><br>";
                echo "</p>";

                echo "<p>";
                    echo "<label> Last Name: </label>";
                    echo "<data>"; echo $_POST["lastName"]; echo "</data><br>";
                echo "</p>";

                echo "<p>";
                    echo "<label> Date of Birth: </label>";
                    echo "<data>"; echo $_POST["dateOfBirth"]; echo "</data><br>";
                echo "</p>";

                echo "<p>";
                    echo "<label> Address: </label>";
                    echo "<data>"; echo $_POST["address"]; echo "</data><br>";
                echo "</p>";

            echo "</container>";
        }   
    ?>
</body>
</html>