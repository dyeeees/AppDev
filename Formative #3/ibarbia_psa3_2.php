<?php
    $numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

    $sum = array_sum($numbers);
    $difference = $numbers[0] - array_sum(array_slice($numbers, 1));
    $product = array_product($numbers);
    $quotient = $numbers[0] / array_product(array_slice($numbers, 1));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Array Operations </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
        html { font-family: "Poppins"; }

        body {
        text-align: center;
        margin: 0;
        padding: 0;
        background-color: #f2f2f2;
        }

        .container {
        max-width: 600px;
        margin: 2rem auto;
        padding: 40px;
        background-color: white;
        border-radius: 10px;
        box-shadow: 0 0 20px gray;
        }

        h1 {
        margin-top: 0;
        color: #333;
        }

        p {
        margin: 10px 0;
        color: #666;
        }

        .result {
        font-weight: bold;
        color: #4CAF50;
        }
    </style>
</head>
<body>
    <div class="container">
    <h1>Array Operations</h1>
    <?php
        echo "<p>Array list: " . implode(", ", $numbers) . "</p>";
        echo "<p>Addition: <span class='result'>" . $sum . "</span></p>";
        echo "<p>Subtraction: <span class='result'>" . $difference . "</span></p>";
        echo "<p>Multiplication: <span class='result'>" . $product . "</span></p>";
        echo "<p>Division: <span class='result'>" . $quotient . "</span></p>";
    ?>
  </div>
</body>
</html>