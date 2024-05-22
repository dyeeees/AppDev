<?php
    $names = array(
        "acheron", "himeko", "kafka", "blade", "bronya", "arlan",
        "sushang", "asta", "natasha", "tingyun", "march", "welt",
        "topaz", "huohuo", "yanqing", "guinaifen", "qingque", "serval",
        "clara", "jingliu"
    );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> List of Names </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        html { font-family: "Poppins", sans-serif; }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #040937;
            color: white;
        }
    </style>
</head>
<body>
    <h1>List of Names</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>Number of characters</th>
            <th>Uppercase first character</th>
            <th>Replace vowels with @</th>
            <th>Check position of character 'a'</th>
            <th>Reverse name</th>
        </tr>

        <?php
            foreach ($names as $name) {
                $numChars = strlen($name);
                $uppercaseFirst = ucfirst($name);
                $replaceVowels = str_replace(['a', 'e', 'i', 'o', 'u'], '@', $name);
                $positionsOfA = array();
                $currentPosition = 0;
                while (($position = strpos($name, 'a', $currentPosition)) !== false) {
                    $positionsOfA[] = $position;
                    $currentPosition = $position + 1;
                }
                $positionOfA = empty($positionsOfA) ? '-' : implode(", ", $positionsOfA);
                $reverseName = strrev($name);

                echo "<tr>";
                echo "<td>" . $name . "</td>";
                echo "<td>" . $numChars . "</td>";
                echo "<td>" . $uppercaseFirst . "</td>";
                echo "<td>" . $replaceVowels . "</td>";
                echo "<td>" . $positionOfA . "</td>";
                echo "<td>" . $reverseName . "</td>";
                echo "</tr>";
            }
        ?>
</body>
</html> 