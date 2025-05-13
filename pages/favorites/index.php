<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Favorites</title>
</head>
<body>
    <div class="nav">
            <a href="../../index.php" class="btn">Introduction</a>
            <a href="../hobbies/index.php" class="btn">My Hobbies</a>
            <a href="index.php" class="btn">My Favorites</a>
            <a href="../goals/index.php" class="btn">My Goals</a>
        </div>
        <div class="hero-section">
            <h1>Things I Like</h1>
            <p>We all have our favorite things. May it be songs, food, color, etc.</p>
        </div>
        <div class="content">
            <h3>FAVORITE LISTS</h3>
            <p>The following are my favorites:</p>
            <div class="line1"></div>
            <div class="hobby-grid">
                <?php
                //Declarations
                $favorites = [
                    ['title' => 'FOOD', 'desc' => 'Adobo & Pastil'],
                    ['title' => 'COLOR', 'desc' => 'Any Shade of Blue'],
                    ['title' => 'BOOK', 'desc' => 'Animal Farm'],
                    ['title' => 'PLACE', 'desc' => 'Quezon Province'],
                    ['title' => 'MOVIE', 'desc' => 'Brooklyn Nine-Nine'],
                    ['title' => 'FLAVOR', 'desc' => 'Ube & Matcha'],
                    ['title' => 'DAY', 'desc' => 'Saturday'],
                    ['title' => 'SONG', 'desc' => 'Irish - The Goo Goo Dolls']
                ];

                //Looping
                foreach ($favorites as $items){
                    echo "<div class='hobby-box'>";
                    echo "<h4>{$items['title']}</h4>";
                    echo "<p>{$items['desc']}</p>";
                    echo "</div>";
                }
                ?>
            <div class="line1"></div>
            </div>
        </div>

</body>
</html>