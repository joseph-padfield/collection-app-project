<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="style.css" rel="stylesheet">
    <title>Reels from the Crypt</title>
</head>

<body>

<header>
<div class="banner">
    <div class="banner_left">
        <h1>Reels<br>from<br>the<br>Crypt</h1>
    </div>
    <div class="banner_right">
        <a href="#search_label">Search</a>
        <div class="dropdown">
            <button class="drop_button">Order By</button>
            <div class="dropdown_content">
                <a href="#">Title</a>
                <a href="#">Year</a>
                <a href="#">Director</a>
                <a href="#">Country</a>
                <a href="#">Language</a>
            </div>
        </div>
        <a href="#add_item">New Film</a>
    </div>
</div>
</header>

<main>
    <h1 class="collection_header">Favourites</h1>
    <div class="main_container">
        <?php
        require_once('access_db.php');
        $query = $db->prepare('SELECT `Title`, `Director`, `Year`, `image_url` FROM `films` WHERE `favourite`="y"');
        $query->execute();
        $results = $query->fetchAll();
        foreach ($results as $film){
            echo "<div>";
            echo "<div class='item' style='background-image: url({$film['image_url']})'>";
            echo '</div>';
            echo "<div>";
            echo '<p>' . $film['Title'] . '</p>';
            echo '<p>' . $film['Director'] . '</p>';
            echo '<p>' . $film['Year'] . '</p>';
            echo '</div>';
            echo '</div>';
        }
        ?>
    </div>
    <h1 class="collection_header">Collection</h1>
    <div class="main_container">
        <?php
        require_once('access_db.php');
        $query = $db->prepare('SELECT `Title`, `Director`, `Year`, `image_url` FROM `films`');
        $query->execute();
        $results = $query->fetchAll();
        foreach ($results as $film){
            echo "<div>";
            echo "<div class='item' style='background-image: url({$film['image_url']})'>";
            echo '</div>';
            echo "<div>";
            echo '<p>' . $film['Title'] . '</p>';
            echo '<p>' . $film['Director'] . '</p>';
            echo '<p>' . $film['Year'] . '</p>';
            echo '</div>';
            echo '</div>';

        }
        ?>
    </div>
    <div class="add_new_item">
        <form id="add_item" method='post' action="add_item.php">

        <label for='title'>Title  </label>
        <input required id='title' name='title' type='text' placeholder='Film Title'>

        <label for='runtime'>Runtime (mins)  </label>
        <input id='runtime' name='runtime' type='number' placeholder='Runtime'>

        <label for='year'>Year released  </label>
        <input required id='year' name='year' type='number' placeholder='Release year' maxlength='4'>

        <label for='director'>Director  </label>
        <input id='director' name='director' type='text' placeholder='Director'>

        <label for='country'>Produced (country)  </label>
        <input id='country' name='country' type='text' placeholder='Produced (country)'>

        <label for='language'>Language  </label>
        <input id='language' name='language' type='text' placeholder='Language'>

        <label for='image_url'>Image URL  </label>
        <input id='image_url' name='image_url' type='text' placeholder='url'>

        <input id='submit' name='submit' type='submit' value="submit">

        </form>
    </div>

</main>

<footer>
    <label id="search_label" for="search">Search</label>
    <input id='search' name='search' type='text' placeholder='Film Title'>
</footer>

</body>
</html>
