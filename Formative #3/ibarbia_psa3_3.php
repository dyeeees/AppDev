<?php
			$num1 = 25;
			$num2 = 13;
			$num3 = 6;

			function your_function($a, $b, $c) {
				$sum = $a + $b + $c;
				$diff = $a - $b - $c;
				$product = $a * $b * $c;
				$quotient = round(($a / $b) / $c, 10);
				return array($sum, $diff, $product, $quotient);
			}

			$results = your_function($num1, $num2, $num3);
		?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Parameter Operations</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<style>
        html { font-family: "Poppins", sans-serif; }

		body {
			text-align: center;
			padding: 20px;
		}
		table {
			width: 100%;
			max-width: 400px;
			margin: 20px auto;
			border-collapse: collapse;
		}
		th, td {
			padding: 10px;
			border: 1px solid #ccc;
		}
		th {
			background-color: #f2f2f2;
		}
	</style>
</head>
<body>
	<h1>Parameter Operations</h1>
	<table>
		<tr>
			<th colspan="2"> My Parameter values:  <?php echo $num1 . ", " . $num2 . ", " . $num3; ?> </th>
		</tr>
		
		<tr>
			<td>Addition</td>
			<td><?php echo $results[0]; ?></td>
		</tr>
		<tr>
			<td>Subtraction</td>
			<td><?php echo $results[1]; ?></td>
		</tr>
		<tr>
			<td>Multiplication</td>
			<td><?php echo $results[2]; ?></td>
		</tr>
		<tr>
			<td>Division</td>
			<td><?php echo $results[3]; ?></td>
		</tr>
	</table>
</body>
</html>