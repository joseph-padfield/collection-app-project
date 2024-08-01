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
        <div class="dropdown">
            <button class="drop_button">Order By</button>
            <form method="get" class="dropdown_content">
                <span class="label_button_flex_row"><input id="title" name="sort" type="radio" value="title" checked>
                <label for="title">Title</label></span>
                <span class="label_button_flex_row"><input id="year" name="sort" type="radio" value="year">
                <label for="year">Year</label></span>
                <span class="label_button_flex_row"><input id="director" name="sort" type="radio" value="director">
                <label for="director">Director</label></span>
                <span class="label_button_flex_row"><input id="country" name="sort" type="radio" value="country">
                <label for="country">Country</label></span>
                <span class="label_button_flex_row"><input id="language" name="sort" type="radio" value="language">
                <label for="language">Language</label></span>
                <label class="sort_select" for="sort_direction"><input id="sort_direction" name="sort_desc" type="checkbox"><span>Sort asc/desc</span></label>
                <div id="sort_submit"><input type="submit" value="sort"></div>
            </form>
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

        function print_results($results)
        {
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
        }
        $columns_to_sort = ['title','director','year','country','language'];

        if (isset($_GET['sort']) && (in_array($_GET['sort'], $columns_to_sort))){
            $sort = $_GET['sort'];
        }
        else {
            $sort = 'title';
        }

        if (isset($_GET['sort_desc']) && ($_GET['sort_desc'] === 'on')) {
            $sort_direction = 'DESC';
        }
        else {
            $sort_direction = 'ASC';
        }
        $query = $db->prepare("SELECT `Title`, `Director`, `Year`, `image_url` FROM `films` WHERE `favourite`='y' ORDER BY `" . "$sort" . "` " . "$sort_direction");
        $query->execute();
        $results = $query->fetchAll();
        print_results($results);
        ?>

    </div>

    <h1 class="collection_header">Collection</h1>

    <div class="main_container">

        <?php

        $query = $db->prepare("SELECT `Title`, `Director`, `Year`, `image_url` FROM `films` ORDER BY `" . "$sort" . "` " . "$sort_direction");

        $query->execute();
        $results = $query->fetchAll();
        print_results($results);
        ?>

    </div>

    <div class="add_new_item">

        <form id="add_item" method='post' action="add_item.php">

        <label for='title'>Title</label>
        <input required id='title' name='title' type='text' placeholder='Film Title'>

        <label for='runtime'>Runtime (mins)</label>
        <input id='runtime' name='runtime' type='number' placeholder='Runtime'>

        <label for='year'>Year released</label>
        <input required id='year' name='year' type='number' placeholder='Release year' maxlength='4'>

        <label for='director'>Director</label>
        <input id='director' name='director' type='text' placeholder='Director'>

        <label for='country'>Produced (country)</label>
        <input id='country' name='country' type='text' placeholder='Produced (country)'>

        <label for='language'>Language</label>
        <input id='language' name='language' type='text' placeholder='Language'>

        <label for='image_url'>Image URL</label>
        <input id='image_url' name='image_url' type='text' placeholder='url'>

        <input id='submit' name='submit' type='submit' value="submit">

        </form>

    </div>

</main>

<footer>
</footer>

</body>
</html>
