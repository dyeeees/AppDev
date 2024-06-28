<?php
    require_once "includes/db_connectData.inc.php";

    try {
        
        $query = "SELECT * FROM dogs";
        $statement = $conn->prepare($query);
        $statement->execute();

        $dogs = $statement->fetchAll(PDO::FETCH_ASSOC);

        $conn = null;
        $statement = null;

    } catch (PDOException $e) {

        die("Query failed: " . $e->getMessage());

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

    <title>Dog Records</title>
    <style>

        body {
            font-family: Montserrat;
            background: linear-gradient(rgba(196, 102, 0, 0.6), rgba(155, 89, 182, 0.6));
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        .card {
            background-color: whitesmoke;
            border: 1px solid #000;
            padding: 20px;
            margin: 10px;
            width: 270px;
            box-shadow: 2px 2px 10px rgba(0,0,0,0.5);
        }

        .card h3 {
            margin: 0;
            padding: 0;
        }

        .card p {
            margin: 5px 0;
            padding: 0;
        }

        h1 {
            text-align: center;
        }

    </style>
</head>
<body>
    <h1> DOG RECORDS </h1>
    <div class="container">
        <?php 
        $rowCount = 3;
        $dogsPerRow = ceil(count($dogs) / $rowCount);
        foreach ($dogs as $index => $dog): 
            if ($index % $dogsPerRow == 0 && $index != 0) {
                echo '</div><div class="container">';
            }
        ?>
            <div class="card">
                <h3>Dog <?php echo $index + 1; ?></h3>
                <p>Name: <?php echo htmlspecialchars($dog['name']); ?></p>
                <p>Breed: <?php echo htmlspecialchars($dog['breed']); ?></p>
                <p>Age: <?php echo htmlspecialchars($dog['age'] . " years old"); ?></p>
                <p>Address: <?php echo htmlspecialchars($dog['address'] . " City"); ?></p>
                <p>Color: <?php echo htmlspecialchars($dog['color']); ?></p>
                <p>Height: <?php echo htmlspecialchars($dog['height'] . " ft"); ?></p>
                <p>Weight: <?php echo htmlspecialchars($dog['weight'] . " kg"); ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
