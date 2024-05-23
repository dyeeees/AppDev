<?php
    $skills = array(
        "Programming languages: Python, Java, C++",
        "Database management: SQL, MongoDB",
        "Web development: HTML, CSS, JavaScript, PHP"
    );

    echo "<h2>Skills</h2>";
    echo "<ul>";
    foreach ($skills as $skill) {
        echo "<li>$skill</li>";
    }
    echo "</ul>";
?>