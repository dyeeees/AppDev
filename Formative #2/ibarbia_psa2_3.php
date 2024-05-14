<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Two-Digit Combinations </title>
    <style>
        html { background-color: #6b4140; }
        .container {
            width: 710px;
            height: 200px;
            background-color: #b7a793;
            position: absolute;
            top: 50%; left: 50%;
            transform: translate(-50%, -50%);
            border-radius: 30px;
            font-family: "Cambria";
            padding: 20px;
            font-size: 27px;
            text-align: center;
        }
    </style>
</head>
<body>
<div class="container">
    <?php
        for ($i = 0; $i < 10; $i++) {
            for ($j = 0; $j < 10; $j++) {
                echo sprintf("%02d", $i * 10 + $j);
                if ($i != 9 || $j != 9) {
                echo ", ";
                }
            }
        }
    ?>
</div>
</body>
</html>