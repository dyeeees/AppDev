<?php
    session_start();

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $_SESSION['fc1'] = $_POST['fc1'];
        $_SESSION['fc2'] = $_POST['fc2'];
        $_SESSION['fc3'] = $_POST['fc3'];
        $_SESSION['fc4'] = $_POST['fc4'];
        $_SESSION['fc5'] = $_POST['fc5'];

        header("Location: ResultColors.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title> Input Color </title>
    <style>
        html {
            height: 100%;
            overflow: hidden;
            background-image: url("https://github.com/dyeeees/AppDev/blob/main/Formative%20%235/Number%203/sumeru.jpg?raw=true");
            background-size: cover;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            margin: 0;
            background-color: rgba(0, 0, 0, 0.4);
        }

        form, .textBox, .submitButton {
            font-family: "Montserrat";
        }

        userInput {
            display: table-row;
        }

        form {
            width: 400px;
            background-color: #8EB282;
            box-shadow: 0 0 3px 1px white;
            border-radius: 10px;
            padding: 20px;
            text-shadow: 1px 1px 5px white;
        }

        .textBox {
            border: 1px solid #ccc;
            margin: 5px;
            padding: 5px;
            display: table-cell;
        }

        label {
            display: table-cell;
            padding-right: 10px;
        }

        .submitButton {
            background: gray;
            color: white;
            border: 0 none;
            border-radius: 5px;
            cursor: pointer;
            padding: 5px;
            margin: 12px;
        }

        .submitButton:hover, .submitButton:focus {
            box-shadow: 0 0 0 1px white, 0 0 0 3px #535353;
        }
    </style>
</head>

<body>
    <center>
        <form action="" method="post">
            <h2> Enter your favorite colors </h2>

            <?php
                echo "<userInput>";
                    echo "<label> Favorite Color 1: </label>";
                    echo "<input type='text' name='fc1' class='textBox' required><br>";
                echo "</userInput>";

                echo "<userInput>";
                    echo "<label> Favorite Color 2: </label>";
                    echo "<input type='text' name='fc2' class='textBox' required><br>";
                echo "</userInput>";    

                echo "<userInput>";
                    echo "<label> Favorite Color 3: </label>";
                    echo "<input type='text' name='fc3' class='textBox' required><br>";
                echo "</userInput>";
                
                echo "<userInput>";
                    echo "<label> Favorite Color 4: </label>";
                    echo "<input type='text' name='fc4' class='textBox' required><br>";
                echo "</userInput>";

                echo "<userInput>";
                    echo "<label> Favorite Color 5: </label>";
                    echo "<input type='text' name='fc5' class='textBox' required><br>";
                echo "</userInput>";

                echo "<input type='submit' value='Send Colors' class='submitButton'>";
            ?>
        </form>
    </center>
</body>
</html>