<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Portfolio / Resume </title>
    <style>
        html { overflow-y: hidden; }
        body {
            font-family:"Calibri";
        }
        .c1 {
            background-color: #555D50;
            width: 550px; height: 792px;
            margin: auto;
            margin-top: -8px;
            box-shadow: 0px 0px 20px black; 
        }
        .c2 {
            background-color: #F8F7F2;
            width: 550px; height: 560px;
            margin: auto; position: absolute;
            top: 198px;
        }
        .c3 {
            background-color: #EDE2D9;
            width: 229px; height: 344px;
            position: absolute;
            z-index: 1; 
        }
        .name {
            font-weight: bold;
            font-size: 34px;
            position: absolute;
            margin-left: 264px; top: 39px;
            color: #FFFFFF;
        }
        .status {
            font-size: 13px;
            position: absolute;
            margin-left: 264px; top: 77px;
            color: #EDE2D9;
        }
        .hr1 {
            position: absolute;
            margin-left: 264px; top: 70px;
        }
        .descrip {
            font-size: 13px;
            position: absolute;
            margin-left: 264px; top: 110px;
            color: #FFFFFF; width: 250px;
        }
        .h1 { font-size: 19px; font-weight: bold; }
        .left_info {
            position: relative;
            margin-left: 30px;
            top: 340px;
        }
        .data { font-size: 14px; margin-left: 20px; }
        img { position: absolute; }
        .SandI { 
            position: relative;
            margin-left: 10px;
            margin-top: -74px;
        }
        .proglan {
            position: relative;
            margin-left: 10px;
            margin-top: -113px;
        }
        .right_info {
            position: relative;
            margin-left: 257px;
            margin-top: -200px;
            width: 200px;
        }
        .above, .below { font-size: 14px; }
        .above { margin-top: 10px; font-weight: bold;}
        .below { margin-top: -15px;}
        .oval {
            position: relative;
            margin-left: 446px;
            margin-top: -491.5px;
        }
        .years {
            background-color: #555D50;
            width: 60px; height: 27px;
            border-radius: 15px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .year {
            font-size: 11px;
            color: #FFFFFF;
            text-align: center;
        }
        .phone_number {
            margin-left: -9px;
            width: 100px;
            font-size: 11.5px;
        }
        .imagebg {
            position: absolute; z-index: 2;
            width: 170px; height: 190px;
            background-color: white;
            margin-left: 30px; margin-top: -170px;
            border-top-left-radius: 80px;
            border-top-right-radius: 80px;
        }
        .me {
            margin-left: 30px; margin-top: -150px;
            width: 170px;
            z-index: 3;
            border-top-left-radius: 60px;
            border-top-right-radius: 60px;
        }
        .image {
            position: relative; z-index: 3;
        }
        hr {
            z-index: 3; margin-top: 30px;
            margin-left: 30px;
        }
        .info {
            position: relative; z-index: 3;
            margin-left: 65px; margin-top: -100px;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <?php
        $firstName = "Jessica";
        $lastName = "Ibarbia";
        $status = "Computer Science Working Student";
        $number = "+63 945 765 7671";
        $email = "202211752@fit.edu.ph";
        $city = "Muntinlupa City";

        $schoolLevels = [
            "COLLEGE" => "FEU Institute of Technology",
            "SENIOR HIGH" => "Lyceum of Alabang",
            "JUNIOR HIGH" => "Poblacion National High School",
            "PRIMARY" => "Poblacion Elementary School"
        ];

        $experiences = [
            "Microsoft" => "Intern Software Developer",
            "Amazon" => "Web Developer"
        ];

        $references = [
            "John Christian Ramos" => "IT Project Manager",
            "James Patrick Rojas" => "Senior Software Developer"
        ];

        $skills = [ "Programming", "Troubleshooting", "Data Management", "Game Development" ];
        $languages = ["C++", "Java", "HTML", "CSS", "PHP", "Python" ];
        $educYears = [ "Current", "2020-2022", "2016-2020", "2010-2016" ];
        $expYears = [ "Current", "2020-2022" ];
        $senNums = [ "+63 945 760 2749", "+63 945 555 7221" ];
    ?>
    <div class="c1">
        <div class="c2">
            <img class="me" src="images/me.png" alt="Jessica Ibarbia">
            <div class="imagebg"></div>
            <div class="image">
                <hr width="170px" style="margin-bottom: 35px;">
                <img src="images/number.png" width="23px" style="margin-left: 30px; margin-top: -30px">
                <hr width="170px" style="margin-bottom: 35px;">
                <img src="images/email.png" width="23px" style="margin-left: 30px; margin-top: -30px">
                <hr width="170px" style="margin-bottom: 35px;">
                <img src="images/loc.png" width="23px" style="margin-left: 30px; margin-top: -30px">
            </div>
            <div class="info">
                <p style="margin-bottom: 20px;"> <?php echo "$number" ?>
                <p style="margin-bottom: 18px;"> <?php echo "$email" ?>
                <p> <?php echo "$city" ?>
            </div>
        </div>
        <div class="c3">
            <div class="left_info">
                <div>
                    <p class="h1"> <?php echo "SKILLS AND INTERESTS" ?>
                    <hr width="195px" style="margin-top: -12px; margin-left: 0px;">
                    <div class="asterisk">
                        <img src="images/asterisk.png" width="10px" style="margin-top: 6px;"><br>
                        <img src="images/asterisk.png" width="10px" style="margin-top: 15px;"><br>
                        <img src="images/asterisk.png" width="10px" style="margin-top: 22px;"><br>
                        <img src="images/asterisk.png" width="10px" style="margin-top: 30px;"><br>
                    </div>
                    <div class="SandI">
                        <?php foreach ($skills as $index => $skill) { ?>
                            <p class="data" style="margin-top:
                            <?php echo ($index === 0) ? '0px' : '-5px'; ?>"> 
                                <?php echo $skill; ?> </p>
                        <?php } ?>
                    </div>
                </div>
                <div>
                    <hr width="195px" style="margin-top: 15px; margin-left: 0px;">
                    <p class="h1" style="margin-top: -3px;"> <?php echo "PROGRAMMING" ?>
                    <p class="h1" style="margin-top: -20px;"> <?php echo "LANGUAGES" ?>
                    <hr width="195px" style="margin-top:-12px; margin-left: 0px;">
                    <div class="asterisk">
                        <img src="images/asterisk.png" width="10px" style="margin-top: 7px;"><br>
                        <img src="images/asterisk.png" width="10px" style="margin-top: 14px;"><br>
                        <img src="images/asterisk.png" width="10px" style="margin-top: 21px;"><br>
                        <img src="images/asterisk.png" width="10px" style="margin-top: 29px;"><br>
                        <img src="images/asterisk.png" width="10px" style="margin-top: 36px;"><br>
                        <img src="images/asterisk.png" width="10px" style="margin-top: 44px;"><br>
                    </div>
                    <div class="proglan">
                        <?php foreach ($languages as $index => $language) { ?>
                            <p class="data" style="margin-top:
                            <?php echo ($index === 0) ? '0px' : '-5px'; ?>">
                                <?php echo $language; ?> </p>
                            <?php } ?>
                    </div>
                </div>
            </div>
            <div class="right_info">
                <div class="education">
                    <p class="h1"> <?php echo "EDUCATION" ?>
                    <hr width="247px" style="margin-top: -12px; margin-left: 0px;">
                    <div>
                        <?php foreach ($schoolLevels as $level => $school) { ?>
                            <p class="above"> <?php echo $level; ?> </p>
                            <p class="below"> <?php echo $school; ?> </p>
                        <?php } ?>
                    </div>
                </div>
                <div class="exp">
                    <hr width="247px" style="margin-top: 13px; margin-left: 0px;">
                    <p class="h1" style="margin-top: 0px;"> <?php echo "EXPERIENCES" ?>
                    <hr width="247px" style="margin-top: -8px; margin-left: 0px;">
                    <div>
                        <?php foreach ($experiences as $company => $jobRole) { ?>
                            <p class="above"> <?php echo $company; ?> </p>
                            <p class="below"> <?php echo $jobRole; ?> </p>
                        <?php } ?>
                    </div>
                </div>
                <div class="ref">
                    <hr width="247px" style="margin-top: 13px; margin-left: 0px;">
                    <p class="h1" style="margin-top: 0px;"> <?php echo "REFERENCES" ?>
                    <hr width="247px" style="margin-top: -8px; margin-left: 0px;" >
                    <div>
                        <?php foreach ($references as $name => $position) { ?>
                            <p class="above"> <?php echo $name; ?> </p>
                            <p class="below"> <?php echo $position; ?> </p>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="oval">
                <?php foreach ($educYears as $educYear) { ?>
                    <div class="years" style="margin-bottom: 
                        <?php echo ($educYear === 'Current') ? '21px' : '21px'; ?>">
                        <v class="year"> <?php echo $educYear; ?> </v>
                    </div>
                <?php } ?>
                
                <p style="margin-top: 76px;">
                <?php foreach ($expYears as $expYear) { ?>
                    <div class="years" style="margin-bottom: 
                        <?php echo ($expYear === 'Current') ? '21px' : '21px'; ?>">
                        <v class="year"> <?php echo $expYear; ?> </v>
                    </div>
                <?php } ?>
                
                <p style="margin-top: 83px;">
                <div class="phone_number">
                    <?php foreach ($senNums as $senNum) { ?>
                        <div class="phone_number" style="margin-bottom: 
                            <?php echo ($senNum === true) ? '25px' : '34px'; ?>">
                            <v class="phone_number"> <?php echo $senNum; ?> </v>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <v class="name"> <?php echo "$firstName ", "$lastName" ?> </v><br>
        <v class="status"> <?php echo "$status" ?> </v><br>
        <hr class="hr1" width="40px">
        <p class="descrip"> 
            <?php 
                echo "A dedicated working student who proficiently \n";
                echo "applies academic knowledge to projects, \n";
                echo "demonstrating a passion for continual learning."
            ?> 
        </p>
        
    </div>
</body>
</html>