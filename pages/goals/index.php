<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="nav">
        <a href="../../index.php" class="btn">Introduction</a>
        <a href="../hobbies/index.php" class="btn">My Hobbies</a>
        <a href="../favorites/index.php" class="btn">My Favorites</a>
        <a href="index.php" class="btn">My Goals</a>
        <div class="hero-section">
            <h1>What I Aim For</h1>
            <p>My goals gives my life purpose and directions. That's why it's important to have one.</p>
        </div>
        <div class="content">
            <h3>MY ASPIRATIONS</h3>
            <p>The following are my long-term and short-term goals:</p>
            <div class="line1"></div>
            <div class="hobby-grid">
                <?php
                //Declarations
                $aspiration = [
                    ['title' => 'GRADUATE', 'desc' => 'Complete my BS I.T. degree successfully'],
                    ['title' => 'GET A JOB', 'desc' => 'Land a tech role I love which is a Developer'],
                    ['title' => 'TRAVEL', 'desc' => 'Visit Japan and Korea, or any country'],
                    ['title' => 'PROJECTS', 'desc' => 'Launch my own tech innovations']
                ];

                //Looping
                foreach ($aspiration as $goal){
                    echo "<div class='hobby-box'>";
                    echo "<h4>{$goal['title']}</h4>";
                    echo "<p>{$goal['desc']}</p>";

                //Conditional
                    if (str_contains($goal['desc'], 'tech')){
                        echo "<p><em>Long-term Goal</em></p>";
                    } else{
                        echo "<p><em>Short-term Goal</em></p>";
                    }
                    echo "</div>";
                }
                ?>
            <div class="line1"></div>
            </div>
        </div>
    </div>
</body>
</html>