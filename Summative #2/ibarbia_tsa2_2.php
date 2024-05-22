<?php
    function cube($s) {
        return $s * $s * $s;
    }

    function rightRectangularPrism($l, $w, $h) {
        return $l * $w * $h;
    }

    function prismOrCylinder($B, $h) {
        return $B * $h;
    }

    function pyramidOrCone($B, $h) {
        return (1/3) * $B * $h;
    }

    function sphere($r) {
        return (4/3) * pi() * $r * $r * $r;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Volume of Shapes </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
        html { font-family: "Poppins", sans-serif; }
        table {
            width: 70%;
            margin: 2rem auto;
            background-color: #f8d7da;
            border: 1px solid #f5c6cb;
        }
        th, td {
            border: 1px solid white;
            padding: 0.5rem;
        }
        th {
            text-align: left;
            background-color: #f5c6cb;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th colspan="4" style="text-align: center;"> Volume of Shapes </th>
        </tr>

        <tr>
            <th> Shape </th>
            <th> Values </th>
            <th> Formula </th>
            <th> Answer </th>
        </tr>

        <tr>
            <td>Cube</td>
            <td>V = s³</td>
            <td>s = 5</td>
            <td><?php echo cube(5); ?></td>
        </tr>

        <tr>
            <td>Right Rectangular Prism</td>
            <td>V = l × w × h</td>
            <td>l = 4, w = 5, h = 6</td>
            <td><?php echo rightRectangularPrism(4, 5, 6); ?></td>
        </tr>

        <tr>
            <td>Prism or Cylinder</td>
            <td>V = B × h</td>
            <td>B = 10, h = 15</td>
            <td><?php echo prismOrCylinder(10, 15); ?></td>
        </tr>

        <tr>
            <td>Pyramid or Cone</td>
            <td>V = (1/3) × B × h</td>
            <td>B = 8, h = 12</td>
            <td><?php echo pyramidOrCone(8, 12); ?></td>
        </tr>

        <tr>
            <td>Sphere</td>
            <td>V = (4/3) × π × r³</td>
            <td>r = 7</td>
            <td><?php echo number_format(sphere(7), 2); ?></td>
        </tr>
    </table>
</body>
</html>
