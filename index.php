<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
            <div class="left">
                <h1>
                    <span class="highlight">HELLO, I AM</span><br> ALEXA MHEL<br> V. GAGAN
                </h1>
            <div class="line"></div>
            <?php
                // Declarations
                $age = 20;
                $course = "Bachelor of Science in Information Technology";
                $spec = "Web and Mobile application";
                $school = "FEU Institue of Technology";
                $isStudent = true;

                echo "<p>I am $age years old and currently studying $course with specialization in $spec at $school.</p>";


                //Conditional
                if ($isStudent){
                    echo "<p>I am passionate about learning programming!</p>";
                } else {
                    echo "<p>I am exploring new paths in life .</p>";
                }
            ?>
            </div>
            <div class="center"></div>
            <div class="right">
                <a href="index.php" class="btn">Introduction</a>
                <a href="pages/hobbies/index.php" class="btn">My Hobbies</a>
                <a href="pages/favorites/index.php" class="btn">My Favorites</a>
                <a href="pages/goals/index.php" class="btn">My Goals</a>
            </div>
        </div>

</body>
</html>