<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Hobbies</title>
</head>
<body>
    <div class="nav">
            <a href="../../index.php" class="btn">Introduction</a>
            <a href="index.php" class="btn">My Hobbies</a>
            <a href="../favorites/index.php" class="btn">My Favorites</a>
            <a href="../goals/index.php" class="btn">My Goals</a>
        </div>
        <div class="hero-section">
                <h1>Things I Enjoy</h1>
                <p>Your hobby is a great way to improve your skills while enjoying!</p>
        </div>
        <div class="content">
            <h3>FOR MY FREE TIME</h3>
            <p>The following is what I do:</p>
            <div class="line1"></div>
            <div class="hobby-grid">
                <?php
                //Declarations
                $hobbies = [
                    ['title' => 'CODING', 'desc' => 'Python, PHP, Java'],
                    ['title' => 'GAMING', 'desc' => 'Mobile Legends'],
                    ['title' => 'COOKING', 'desc' => 'Complex Foods'],
                    ['title' => 'GARDENING', 'desc' => 'Outdoor and Indoor']
                ];

                //Looping
                foreach ($hobbies as $hobby){
                    echo "<div class='hobby-box'>";
                    echo "<h4>{$hobby['title']}</h4>";
                    echo "<p>{$hobby['desc']}</p>";
                    echo "</div>";
                }
                ?>
            <div class="line1"></div>
            </div>
        </div>
</body>
</html>