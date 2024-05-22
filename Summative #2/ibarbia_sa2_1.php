<?php
    $fruits = array(
        array(
            "name"    => "Mango",
            "descrip" => "Vibrant orange-yellow skin",
            "facts"   => "The mango tree can live for over 100 years and grow up to 100 feet tall.",
            "image"   => "https://github.com/dyeeees/AppDev/blob/main/Summative%20%232/fruits/mango.png?raw=true"
        ),
        array(
            "name"    => "Kiwi",
            "descrip" => "Fuzzy brown exterior, bright green flesh",
            "facts"   => "The first kiwi was discovered growing wild in China and was originally called the \"Chinese gooseberry.\"",
            "image"   => "https://github.com/dyeeees/AppDev/blob/main/Summative%20%232/fruits/kiwi.png?raw=true"
        ),
        array(
            "name"    => "Avocado",
            "descrip" => "Thick, green skin",
            "facts"   => "Avocados are considered a fruit, but are botanically a large berry with a single seed.",
            "image"   => "https://github.com/dyeeees/AppDev/blob/main/Summative%20%232/fruits/avocado.png?raw=true"
        ),
        array(
            "name"    => "Pineapple",
            "descrip" => "Tough, spiny green exterior, sweet yellow flesh",
            "facts"   => "It takes about 2-3 years for a single pineapple plant to produce its first fruit.",
            "image"   => "https://github.com/dyeeees/AppDev/blob/main/Summative%20%232/fruits/pineapple.png?raw=true"
        ),
        array(
            "name"    => "Blueberry",
            "descrip" => "Small, round, blue-colored berries",
            "facts"   => "Blueberry plants can live for over 50 years and some wild plants are estimated to be over 13,000 years old.",
            "image"   => "https://github.com/dyeeees/AppDev/blob/main/Summative%20%232/fruits/blueberry.png?raw=true"
        ),
        array(
            "name"    => "Banana",
            "descrip" => "Long, curved tropical fruit with a thick, peel-able skin",
            "facts"   => "Banana plants are the largest herbaceous flowering plants, with some reaching over 25 feet tall.",
            "image"   => "https://github.com/dyeeees/AppDev/blob/main/Summative%20%232/fruits/banana.png?raw=true"
        ),
        array(
            "name"    => "Strawberry",
            "descrip" => "Bright red exterior",
            "facts"   => "Strawberries are the only fruit with their seeds on the outside.",
            "image"   => "https://github.com/dyeeees/AppDev/blob/main/Summative%20%232/fruits/strawberry.png?raw=true"
        ),
        array(
            "name"    => "Pomegranate",
            "descrip" => "Thick, leathery red skin, juicy red seeds (arils)",
            "facts"   => "The pomegranate's name comes from the French \"pomme garnete\" meaning \"seeded apple.\"",
            "image"   => "https://github.com/dyeeees/AppDev/blob/main/Summative%20%232/fruits/pomegranate.png?raw=true"
        ),
        array(
            "name"    => "Dragonfruit",
            "descrip" => "Bright pink or yellow exterior, white flesh with black seeds",
            "facts"   => "The dragonfruit flower only blooms at night and is pollinated by bats and moths.",
            "image"   => "https://github.com/dyeeees/AppDev/blob/main/Summative%20%232/fruits/dragonfruit.png?raw=true"
        ),
        array(
            "name"    => "Durian",
            "descrip" => " Thick, brown-green spiky shell, pale to golden-yellow flesh",
            "facts"   => "Durian is known as the \"king of fruits\" in Southeast Asia, prized for its unique, pungent flavor.",
            "image"   => "https://github.com/dyeeees/AppDev/blob/main/Summative%20%232/fruits/durian.png?raw=true"
        )
    );

    usort($fruits, function($a, $b) {
        return strcasecmp($a['name'], $b['name']);
    });
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Fuit Directory </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
        html { 
            font-family: "Poppins";
            background-color: #AB8D83;
        }
        h1 { 
            text-align: center;
        }
        table {
            width: 100%;
            
        }
        th {
            background-color: #F2D7BE;
            padding: 20px;
            text-align: center;
            border-bottom: 1px solid black;
        }
        td {
            background-color: #F2D7BE;
            padding: 10px;
            text-align: center;
            border-bottom: 1px solid black;
        }
        .image-container {
            width: 200px;
            height: 200px;
            background-color: #ccc;
            border-radius: 20%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 24px;
            font-weight: bold;
            color: #fff;
        }
        .fruit-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 20%;
        }
    </style>
</head>
<body>
    <h1> My Fruits</h1>
    <table>
        <tr>
            <th class="image"> Image </th>
            <th class="name"> Name </th>
            <th class="description"> Description </th>
            <th class="facts"> Facts </th>
        </tr>
        <?php
            $index = 1;
            foreach ($fruits as $fruit) {
                echo "<tr>";
                echo "<td><div class='image-container'><img src='" . $fruit['image'] . "' alt='" . $fruit['name'] . "' class='fruit-image'></div></td>";
                echo "<td>" . $fruit['name'] . "</td>";
                echo "<td>" . $fruit['descrip'] . "</td>";
                echo "<td>" . $fruit['facts'] . "</td>";
                echo "</tr>";
                $index++;
            }
        ?>
        <tbody>
            
        </tbody>
    </table>
</body>
</html>