<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title> Favorite Colors </title>
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

        display {
            font-family: "Montserrat";
            background-color: #8EB282;
            box-shadow: 0 0 3px 1px white;
            border-radius: 10px;
            padding: 50px;
            text-shadow: 1px 1px 5px white;
            display: table-row;
        }

        label, info {
            display: table-cell;
            padding: 10px;
        }
    </style>
</head>

<body>
    <?php
        if (isset($_SESSION['fc1'])) {
            echo "<display>";
                echo "<label> My Favorite Color: </label>";
                echo "<info>" . $_SESSION['fc1'] . "</info><br>";
                
                echo "<label> My Favorite Color: </label>";
                echo "<info>" . $_SESSION['fc2'] . "</info><br>";
                
                echo "<label> My Favorite Color: </label>";
                echo "<info>" . $_SESSION['fc3'] . "</info><br>";
                
                echo "<label> My Favorite Color: </label>";
                echo "<info>" . $_SESSION['fc4'] . "</info><br>";
                
                echo "<label> My Favorite Color: </label>";
                echo "<info>" . $_SESSION['fc5'] . "</info>";
        } else {
                echo "No favorite colors are set.";
            echo "</display>";
        }
    ?>
</body>
</html>