<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="style.css" rel="stylesheet">
    <title>Films Collector</title>
</head>

<body>

<header>
<div class="banner">
    <div>
        <h1><span class="left_float">Film</span><br><span>Collector</span><br><span class="right_float">App</span></h1>
    </div>
</div>
</header>

<main>

    <div class="main_container">
        <?php
        require_once('access_db.php');
        $query = $db->prepare('SELECT `Title`, `Director`, `Year`, `image_url` FROM `films`');
        $query->execute();
        $results = $query->fetchAll();
        foreach ($results as $film){
            echo "<div class='item' style='background-image: url({$film['image_url']})'>";
            echo '<p>' . $film['Title'] . '</p>';
            echo '<p>' . $film['Director'] . '</p>';
            echo '<p>' . $film['Year'] . '</p>';
            echo '</div>';
        }
        ?>
    </div>

</main>

<footer>

</footer>

</body>

</html>
