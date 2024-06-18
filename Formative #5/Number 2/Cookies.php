<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title> Cookie </title>
    <style>
        html {
            height: 100%;
            overflow: hidden;
            background-image: url("mondstadt.jpg");
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

        form, .displayCookie {
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
        }

        form {
            width: 400px;
            text-align: center;
        }

        .displayCookie {
            margin-left: 30px;
        }

        h1 {
            font-family: Montserrat;
            font-size: 20px;
            color: #2C3E50;
        }

        .userInput, .submitButton {
            font-family: Montserrat;
            font-size: 18px;
        }

        .userInput {
            border: 1px solid #ccc;
            padding: 15px;
            margin: 10px;
            width: 80%;
        }

        .submitButton {
            color: white;
            background: #27AE60;
            width: 150px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin: 10px;
            padding: 10px;
        }

        .submitButton:hover, .submitButton:focus {
            box-shadow: 0 0 0 2px white, 0 0 0 3px #27AE60;
        }

        .information {
            display: table-row;
        }

        label, info {
            font-family: Montserrat;
            padding: 10px;
            display: table-cell;
        }

    </style>
</head>

<body>
    <?php
        if(!isset($_POST['firstName'])) {
    ?>
        <form action=" <?php $_PHP_SELF ?> " method="post">
            <h1> INPUT INFORMATION </h1>
            <input class="userInput" type="text" name="firstName" placeholder="First Name" required><br>

            <input class="userInput" type="text" name="middleName" placeholder="Middle Name"><br>

            <input class="userInput" type="text" name="lastName" placeholder="Last Name" required><br>

            <input class="submitButton" type="submit">
        </form> 
    
    <?php
        } else {
            if($_SERVER["REQUEST_METHOD"] == "POST") {
                $cookie_first = "fName";
                $firstName = $_POST["firstName" ];
                
                $cookie_middle = "mName";
                $middleName = $_POST["middleName"];
        
                $cookie_last = "lName";
                $lastName = $_POST["lastName"];
        
                setcookie($cookie_first, $firstName, time() + 10);
                setcookie($cookie_middle, $middleName, time() + 20);
                setcookie($cookie_last, $lastName, time() + 30);

                header("Location: " . basename(__FILE__));
            }
        }

        if(isset($_COOKIE['fName']) && isset($_COOKIE['lName'])) {
            echo "<div class='displayCookie'>";
                echo "<p class='information'>";
                    echo "<label>First Name:</label>";
                    echo "<info id='fName'>" . $_COOKIE['fName'] . "</info><br>";
                echo "</p>";
                echo "<p class='information'>";
                    echo "<label>Middle Name:</label>";
                    echo "<info id='mName'>" . $_COOKIE['mName'] . "</info><br>";
                echo "</p>";
                echo "<p class='information'>";
                    echo "<label>Last Name:</label>";
                    echo "<info id='lName'>" . $_COOKIE['lName'] . "</info><br>";
                echo "</p>";
            echo "</div>";

            echo "<script>";
            echo "setTimeout(function() { document.getElementById('fName').innerHTML = 'Expired Cookie'; }, 10000);";
            echo "setTimeout(function() { document.getElementById('mName').innerHTML = 'Expired Cookie'; }, 20000);";
            echo "setTimeout(function() { document.getElementById('lName').innerHTML = 'Expired Cookie'; }, 30000);";
            echo "</script>";
        }
    ?>
</body>
</html>