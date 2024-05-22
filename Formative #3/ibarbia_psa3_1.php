<?php
    $people = array(
        array(
            "name" => "Shōyō Hinata",
            "image" => "https://github.com/dyeeees/AppDev/blob/main/Formative%20%233/karasuno%20members/shoyo.png?raw=true",
            "age" => 27,
            "bday" => "June 21, 1996",
            "contact" => "0987654321"
        ),
        array(
            "name" => "Daichi Sawamura",
            "image" => "https://github.com/dyeeees/AppDev/blob/main/Formative%20%233/karasuno%20members/daichi.png?raw=true",
            "age" => 29,
            "bday" => "December 31, 1994",
            "contact" => "0987654322"
        ),
        array(
            "name" => "Yū Nishinoya",
            "image" => "https://github.com/dyeeees/AppDev/blob/main/Formative%20%233/karasuno%20members/nishinoya.png?raw=true",
            "age" => 28,
            "bday" => "October 10, 1995",
            "contact" => "0987654323"
        ),
        array(
            "name" => "Asahi Azumane",
            "image" => "https://github.com/dyeeees/AppDev/blob/main/Formative%20%233/karasuno%20members/asahi.png?raw=true",
            "age" => 28,
            "bday" => "January 1, 1995",
            "contact" => "0987654324"
        ),
        array(
            "name" => "Kei Tsukishima",
            "image" => "https://github.com/dyeeees/AppDev/blob/main/Formative%20%233/karasuno%20members/kei.png?raw=true",
            "age" => 27,
            "bday" => "September 27, 1996",
            "contact" => "0987654325"
        ),
        array(
            "name" => "Ryūnosuke Tanaka",
            "image" => "https://github.com/dyeeees/AppDev/blob/main/Formative%20%233/karasuno%20members/tanaka.png?raw=true",
            "age" => 27,
            "bday" => "March 3, 1996",
            "contact" => "0987654326"
        ),
        array(
            "name" => "Tobio Kageyama",
            "image" => "https://github.com/dyeeees/AppDev/blob/main/Formative%20%233/karasuno%20members/tobio.png?raw=true",
            "age" => 27,
            "bday" => "December 22, 1996",
            "contact" => "0987654327"
        ),
        array(
            "name" => "Kōshi Sugawara",
            "image" => "https://github.com/dyeeees/AppDev/blob/main/Formative%20%233/karasuno%20members/koshi.png?raw=true",
            "age" => 29,
            "bday" => "June 13, 1994",
            "contact" => "0987654328"
        ),
        array(
            "name" => "Tadashi Yamaguchi",
            "image" => "https://github.com/dyeeees/AppDev/blob/main/Formative%20%233/karasuno%20members/tadashi.png?raw=true",
            "age" => 27,
            "bday" => "November 10, 1996",
            "contact" => "0987654329"
        ),
        array(
            "name" => "Chikara Ennoshita",
            "image" => "https://github.com/dyeeees/AppDev/blob/main/Formative%20%233/karasuno%20members/chikara.png?raw=true",
            "age" => 28,
            "bday" => "December 26, 1995",
            "contact" => "0987654330"
        )
    );

    usort($people, function($a, $b) {
        return strcasecmp($a['name'], $b['name']);
    });
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> People </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
        html { font-family: "Poppins"; }
        
        table {
            width: 85%;
            border-collapse: collapse;
            margin: 2rem auto;
        }
        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
            height: 50px;
        }
        .image-container {
            width: 200px;
            height: 200px;
            background-color: #ccc;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 24px;
            font-weight: bold;
            color: #fff;
        }
        .member-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 20%;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>No.</th>
            <th>Name</th>
            <th>Image</th>
            <th>Age</th>
            <th>Birthday</th>
            <th>Contact</th>
        </tr>
        <?php
            $index = 1;
            foreach ($people as $person) {
                echo "<tr>";
                echo "<td>" . $index . "</td>";
                echo "<td>" . $person['name'] . "</td>";
                echo "<td><div class='image-container'><img src='" . $person['image'] . "' alt='" . $person['name'] . "' class='member-image'></div></td>";
                echo "<td>" . $person['age'] . "</td>";
                echo "<td>" . $person['bday'] . "</td>";
                echo "<td>" . $person['contact'] . "</td>";
                echo "</tr>";
                $index++;
            }
        ?>
    </table>
</body>
</html>