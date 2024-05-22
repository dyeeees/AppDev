<?php
    $people = array(
        array(
            "name" => "Shōyō Hinata",
            "image" => "A",
            "age" => 25,
            "bday" => "June 21, 1996",
            "contact" => "0987654321"
        ),
        array(
            "name" => "Daichi Sawamura",
            "image" => "B",
            "age" => 32,
            "bday" => "December 31, 1994",
            "contact" => "0987654322"
        ),
        array(
            "name" => "Yū Nishinoya",
            "image" => "C",
            "age" => 19,
            "bday" => "October 10, 1995",
            "contact" => "0987654323"
        ),
        array(
            "name" => "Asahi Azumane",
            "image" => "D",
            "age" => 41,
            "bday" => "January 1, 1995",
            "contact" => "0987654324"
        ),
        array(
            "name" => "Kei Tsukishima",
            "image" => "E",
            "age" => 27,
            "bday" => "September 27, 1996",
            "contact" => "0987654325"
        ),
        array(
            "name" => "Ryūnosuke Tanaka",
            "image" => "F",
            "age" => 29,
            "bday" => "March 3, 1996",
            "contact" => "0987654326"
        ),
        array(
            "name" => "Tobio Kageyama",
            "image" => "G",
            "age" => 35,
            "bday" => "December 22, 1996",
            "contact" => "0987654327"
        ),
        array(
            "name" => "Kōshi Sugawara",
            "image" => "H",
            "age" => 22,
            "bday" => "June 13, 1994",
            "contact" => "0987654328"
        ),
        array(
            "name" => "Tadashi Yamaguchi",
            "image" => "I",
            "age" => 38,
            "bday" => "November 10, 1996",
            "contact" => "0987654329"
        ),
        array(
            "name" => "Chikara Ennoshita",
            "image" => "J",
            "age" => 24,
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
    <style>
        table {
            width: 80%;
            border-collapse: collapse;
            font-family: Arial, sans-serif;
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
            width: 50px;
            height: 50px;
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