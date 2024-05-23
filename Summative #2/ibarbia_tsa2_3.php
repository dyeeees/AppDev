<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
        html { font-family: Poppins;}

        body { background-color: #F5DEB3; }

        div {
            width: 39%;
            margin: 2rem auto;
            border-radius: 20px;
            border: none;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        header {
            border-top-left-radius: 17px;
            border-top-right-radius: 17px;
            background-color: #8B4513;
            color: #fff;
            padding: 40px;
            text-align: center;
        }

        main {
            padding: 20px;
            background-color: #fff;
            border-bottom-left-radius: 17px;
            border-bottom-right-radius: 17px;
        }

        h2 {
            margin-top: 30px;
            color: #8B4513;
        }

        ul { margin-top: 10px; }

        footer {
            border-bottom-left-radius: 17px;
            border-bottom-right-radius: 17px;
            background-color: #8B4513;
            color: #fff;
            padding: 40px;
            text-align: center;
        }

        .profile-picture {
            border-radius: 10%;
            margin-right: 20px;
            float: left;
            border-color: black;
            box-shadow: 0 0 5px 5px lightgray;
            width: 170px;
            height: 170px;
        }

        .separator {
            border-bottom: 1px solid #ddd;
            margin-top: 30px;
            width: 100%;
        }
    </style>
</head>
<body>
    <div>
        <header></header>
        
        <main>
            <?php include 'resume parts/personal_information.php'; ?>
            <div class="separator"></div>
            <?php include 'resume parts/career_objective.php'; ?>
            <div class="separator"></div>
            <?php include 'resume parts/educational_attainment.php'; ?>
            <div class="separator"></div>
            <?php include 'resume parts/skills_and_expertise.php'; ?>
            <div class="separator"></div>
            <?php include 'resume parts/affiliation.php'; ?>
            <div class="separator"></div>
            <?php include 'resume parts/work_experience.php'; ?>
        </main>

        <footer></footer>
    </div>
</body>
</html>