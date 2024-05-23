<?php
    $workExperience = array(
        "title" => "Internship at Microsoft Corp.",
        "duration" => "(Summer 2026)",
        "responsibilities" => array(
            "Developed and maintained web applications using PHP and MySQL",
            "Participated in project planning and team meetings",
            "Assisted in bug fixing and software testing"
        )
    );

    echo "<h2>Work Experience</h2>";
    echo "<p>{$workExperience['title']} {$workExperience['duration']}</p>";
    echo "<p>Responsibilities:";
    echo "<ul>";
    foreach ($workExperience['responsibilities'] as $responsibility) {
        echo "<li>$responsibility</li>";
    }
    echo "</ul>";
    echo "</p>";
    ?>