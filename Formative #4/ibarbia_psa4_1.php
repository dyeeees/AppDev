<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Short Stories </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        html { font-family: "Poppins", sans-serif; }
        body {
            line-height: 1.6;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container-wrapper {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: flex-start;
            gap: 20px;
            margin: 20px;
            max-width: 100%;
        }

        .container {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            padding: 20px;
            width: 350px;
            height: 1000px; /* Fixed height for uniformity */
            text-align: justify;
            margin-bottom: 20px;
            display: flex;
            flex-direction: column;
            overflow-y: auto; /* Scroll if content exceeds height */
        }

        .story-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
            text-align: center;
        }

        .story-content {
            font-size: 18px;
            flex: 1;
            margin-bottom: 20px;
        }

        .story-image {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <?php
        require_once 'short stories/s1.php';
        require_once 'short stories/s2.php';
        require_once 'short stories/s3.php';
        require_once 'short stories/s4.php';
        require_once 'short stories/s5.php';
    ?>
</body>
</html>
