<!DOCTYPE html>
<html>
<head>
    <title>People Information</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            font-family: Arial, sans-serif;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
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
    </style>
</head>
<body>
    <?php
        // Create an array of people's information
        $people = array(
            array(
                "name" => "Alice",
                "image" => "A",
                "age" => 25,
                "birthday" => "1998-05-15",
                "contact" => "0987654321"
            ),
            array(
                "name" => "Bob",
                "image" => "B",
                "age" => 32,
                "birthday" => "1992-09-03",
                "contact" => "0987654322"
            ),
            array(
                "name" => "Charlie",
                "image" => "C",
                "age" => 19,
                "birthday" => "2005-02-28",
                "contact" => "0987654323"
            ),
            array(
                "name" => "David",
                "image" => "D",
                "age" => 41,
                "birthday" => "1983-11-12",
                "contact" => "0987654324"
            ),
            array(
                "name" => "Emily",
                "image" => "E",
                "age" => 27,
                "birthday" => "1997-06-30",
                "contact" => "0987654325"
            ),
            array(
                "name" => "Frank",
                "image" => "F",
                "age" => 29,
                "birthday" => "1995-08-08",
                "contact" => "0987654326"
            ),
            array(
                "name" => "George",
                "image" => "G",
                "age" => 35,
                "birthday" => "1989-03-21",
                "contact" => "0987654327"
            ),
            array(
                "name" => "Hannah",
                "image" => "H",
                "age" => 22,
                "birthday" => "2002-04-17",
                "contact" => "0987654328"
            ),
            array(
                "name" => "Ivan",
                "image" => "I",
                "age" => 38,
                "birthday" => "1986-10-06",
                "contact" => "0987654329"
            ),
            array(
                "name" => "Jessica",
                "image" => "J",
                "age" => 24,
                "birthday" => "2000-01-01",
                "contact" => "0987654330"
            )
        );

        // Sort the array alphabetically by name
        usort($people, function($a, $b) {
            return strcasecmp($a['name'], $b['name']);
        });
    ?>

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
                echo "<td><div class='image-container'>" . $person['image'] . "</div></td>";
                echo "<td>" . $person['age'] . "</td>";
                echo "<td>" . $person['birthday'] . "</td>";
                echo "<td>" . $person['contact'] . "</td>";
                echo "</tr>";
                $index++;
            }
        ?>
    </table>
</body>
</html>