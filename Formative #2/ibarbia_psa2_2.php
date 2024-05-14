<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $firstName = $_POST["firstName"];
        $midIni = $_POST["midIni"];
        $lastName = $_POST["lastName"];
        $grade = intval($_POST["grade"]);

        if (isset($_FILES["img"]) && $_FILES["img"]["error"] == UPLOAD_ERR_OK) {
            $imageTmp = $_FILES["img"]["tmp_name"];
            $imageName = $_FILES["img"]["name"];
            $target_dir = "uploads/";
            $target_file = $target_dir . basename($imageName);
            move_uploaded_file($imageTmp, $target_file);
        }

        $letterGrade = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $grade = $_POST["grade"];
            
            if ($grade >= 93 && $grade <= 100) {
                $letterGrade = "A";
            } elseif ($grade >= 90 && $grade <= 92) {
                $letterGrade = "A-";
            } elseif ($grade >= 87 && $grade <= 89) {
                $letterGrade = "B+";
            } elseif ($grade >= 83 && $grade <= 86) {
                $letterGrade = "B";
            } elseif ($grade >= 80 && $grade <= 82) {
                $letterGrade = "B-";
            } elseif ($grade >= 77 && $grade <= 79) {
                $letterGrade = "C+";
            } elseif ($grade >= 73 && $grade <= 76) {
                $letterGrade = "C";
            } elseif ($grade >= 70 && $grade <= 72) {
                $letterGrade = "C-";
            } elseif ($grade >= 67 && $grade <= 69) {
                $letterGrade = "D+";
            } elseif ($grade >= 63 && $grade <= 66) {
                $letterGrade = "D";
            } elseif ($grade >= 60 && $grade <= 62) {
                $letterGrade = "D-";
            } else {
                $letterGrade = "F";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Grade </title>
    <style>
        html { background-color: #6b4140; }
        .container {
            width: 400px;
            height: 400px;
            background-color: #D3D3D3;
            position: absolute;
            top: 30%; left: 50%;
            transform: translate(-50%, -50%);
            border-radius: 30px;
            font-family: "Courier";
            font-weight: bold;
        }
        .container2 {
            width: 450px;
            height: 200px;
            background-color: #D3D3D3;
            position: absolute;
            top: 73%; left: 50%;
            transform: translate(-50%, -50%);
            border-radius: 30px;
            font-family: "Arial";
        }
        form {
            margin-top: 30px;
            margin-left: 100px;
        }
        .submit {
            width: 80px;
            height: 30px;
            margin-top: 15px;
            border-radius: 20px;
            margin-left: 60px;
            border: none;
            color: white;
            font-weight: bold;
            background-color: #008631;
        }
        .submit:hover { background-color: #3a5f3a; }
        input[type="file"] {
            padding: 5px;
            width: 200px;
            background-color: white;
        }
        input[type="text"] {
            height: 25px;
            width: 206px;
            background-color: white;
            border: none;
        }
        .info {
            font-family: "Courier";
            margin-top: 45px;
            margin-left: 213px;
            font-weight: bold;
        }
        .profile {
            padding-top: 65px;
            padding-bottom: 65px;
            padding-right: 10px;
            padding-left: 10px;
            width: 130px;
            top: 73%; left: 43%;
            transform: translate(-50%, -50%);
            position: absolute;
            border-radius: 10px;
        }
        .rank {
            margin-top: -45.4px;
            margin-left: 100px;
        }
    </style>
</head>
<body>
    

    <div class="container">
    <form action="ibarbia_psa2_2.php" method="post" enctype="multipart/form-data">
            
                First Name: <br>
                <input type="text" name="firstName"><br><br>
                Middle Initial: <br>
                <input type="text" name="midIni"><br><br>
                Last Name: <br>
                <input type="text" name="lastName"><br><br>
                Grade: <br>
                <input type="text" name="grade"><br><br>
                Insert Picture:
                <input type="file" id="img" name="img" accept="image/*"> <br>
                
                <input type="submit" class="submit">

            </div> 
        </form>
    </div>

    <div class="container2">
        <div class="info">

            <div class="name">
                <label> Name: </label><br>
                <v style="font-size: 18px;"> <?php echo htmlspecialchars($_POST["firstName"]) . " " . htmlspecialchars($_POST["midIni"]) . " " . htmlspecialchars($_POST["lastName"]) ?><br><br>
            </div>
            
            <div class="grade">
                <label> Grade: </label><br>
                <v style="font-size: 24px;"> <?php echo htmlspecialchars($_POST["grade"]) ?>
            </div>

            <div class="rank">
                <label> Rank: </label><br>
                <v style="font-size: 24px;"> <?php echo htmlspecialchars($letterGrade) ?>
            </div>
        
        </div>
    </div>

    <div class="image">
        <?php 
            if (isset($target_file)) {
                if (file_exists($target_file)) {
                    echo '<img src="' . $target_file . '" alt="Profile Picture" class="profile">';
                }
            }
        ?>
    </div>
</body>
</html>