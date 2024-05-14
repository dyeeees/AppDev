<?php
    $header = "MEASURE CONVERSION - LENGTHS";

    // Check if the form has been submitted
    if(isset($_POST['submit'])) {
        if(!empty($_POST['value']))
            $userinput = $_POST['value'];
        if(!empty($_POST['unit']))
            $valueinput = $_POST['unit'];
        if(!empty($_POST['convert']))
            $convert = $_POST['convert'];

        // Calculate the converted value
        switch($valueinput) {
            case "mm": $val = $userinput * 0.001; break;
            case "cm": $val = $userinput * 0.01; break;
            case "dm": $val = $userinput * 0.1; break;
            case "m": $val = $userinput; break;
            case "km": $val = $userinput * 1000; break;
            case "in": $val = $userinput * 0.0254; break;
            case "yd": $val = $userinput * 0.9144; break;
            case "ch": $val = $userinput * 20.1168; break;
            case "fur": $val = $userinput * 201.168; break;
            case "mile": $val = $userinput * 1609.34; break;
        }

        switch($convert) {
            case "mm": $ans = $val / 0.001; break;
            case "cm": $ans = $val / 0.01; break;
            case "dm": $ans = $val / 0.1; break;
            case "m": $ans = $val; break;
            case "km": $ans = $val / 1000; break;
            case "in": $ans = $val / 0.0254; break;
            case "yd": $ans = $val / 0.9144; break;
            case "ch": $ans = $val / 20.1168; break;
            case "fur": $ans = $val / 201.168; break;
            case "mile": $ans = $val / 1609.34; break;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Conversion </title>
    <style>
        .container {
            width: 600px;
            height: 300px;
            background-color: #D3D3D3;
            box-shadow: 0px 0px 15px 5px gray;
            position: absolute;
            top: 50%; left: 50%;
            transform: translate(-50%, -50%);
            border-radius: 30px;
            font-family: "Cambria";
        }
        .header {
            font-size: 29px;
            margin-top: 45px;
            margin-left: 70px;
            margin-bottom: 30px;
        }
        form {
            width: 400px;
            height: 100px;
            margin-left: 103px;
        }
        .unit, .convert, .instruction { font-size: 20px; }
        select {
            height: 22px; 
            font-family: "Cambria";
        }
        .unit_opt { margin-right: 77px; }
        .instruction { 
            margin-top: 30px;
            margin-left: 20px;
        }
        .ans {
            background-color: whitesmoke;
            padding: 10px;
            border-radius: 5px;
            margin-left: 100px;
            margin-right: 100px;
            font-size: 20px;
            text-align: center;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1 class="header"> <?php echo $header ?> </h1>

        <form action="ibarbia_psa2_1.php" name="form" method="post">

            <label for="unit" class="unit"> Unit: </label>
            <select class="unit_opt" name="unit" id="unit">
                <option value="mm"> millimetre </option>
                <option value="cm"> centimetre </option>
                <option value="dm"> decimetre </option>
                <option value="m"> metre </option>
                <option value="km"> kilometre </option>
                <option value="in"> inches </option>
                <option value="yd"> yard </option>
                <option value="ch"> chain </option>
                <option value="fur"> furlong </option>
                <option value="mile"> mile </option>
            </select>

            <label for="convert" class="convert"> Convert to: </label>
            <select name="convert" id="convert">
                <option value="mm"> millimetre </option>
                <option value="cm"> centimetre </option>
                <option value="dm"> decimetre </option>
                <option value="m"> metre </option>
                <option value="km"> kilometre </option>
                <option value="in"> inches </option>
                <option value="yd"> yard </option>
                <option value="ch"> chain </option>
                <option value="fur"> furlong </option>
                <option value="mile"> mile </option>
            </select>

            <div class="instruction"> Enter Value: 
                <input type="text" name="value" id="value">
                <input type="submit" name="submit" value="Convert">
            </div>
        </form>

        <?php if(isset($_POST['submit'])): ?>
            <div class="ans">
                <?php echo number_format($ans, 2) . " " . $convert; ?>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
