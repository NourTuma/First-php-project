<?php

    $fullName = " Nour Tuma"; 
    $age = 23; //integer
    $jobTitle = " Fullstack Web Developer"; 
    $city = "Damascus";
    $yearsOfExperience = 9.5; 
    $drivingLicense = true; 
    $skills = ["PHP", "Laravel", "Vue.js", "MySQL"]; 
    $image = "./image/OIP.jpg"; 
    $currentDate = date("Y-m-d");

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> CV Personal </title>
</head>

<body>
    <header>
        <img src="<?php echo $image ; ?>" alt ="الصورة الشخصية" width="100" height="100">
        <h1><?php echo $fullName; ?></h1>
    </header>

    <main>

    <p> Age: <?php echo $age; ?> // [<?php echo gettype($age); ?>] </p>
    <p>Job Title: <?php echo $jobTitle; ?> // [<?php echo gettype($jobTitle); ?>]</p>
    <p>City: <?php echo $city; ?> // [<?php echo gettype($city); ?>]</p>
    <p> Years Of Experience : <?php echo $yearsOfExperience; ?> // [<?php echo gettype($yearsOfExperience); ?>]</p>
    <p> DrivingLicense : <?php echo $drivingLicense; ?> // [<?php echo gettype($drivingLicense); ?>]</p>

    <p>Skill:</p>
    <ul>
        <?php foreach ($skills as $skill): ?>
            <li><p><?php echo $skill; ?></p></li>
        <?php endforeach; ?>
    </ul>

    <p>Date: <?php echo $currentDate; ?> // [<?php echo gettype($currentDate); ?>]</p>
    </main>

</body>
</html>