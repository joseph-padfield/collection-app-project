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
    <div class="banner_left">
        <h1><span class="left_float">Film</span><br><span>Collector</span><br><span class="right_float">App</span></h1>
    </div>
    <div class="banner_right">

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
    <div class="add_new_item">

<form method='post'>

<label for='title'>Title  </label>
<input id='title' name='title' type='text' placeholder='Film Title'>

<label for='runtime'>Runtime (mins)  </label>
<input id='runtime' name='runtime' type='number' placeholder='Runtime'>

<label for='year'>Year released  </label>
<input id='year' name='year' type='number' placeholder='Release year' maxlength='4'>

<label for='director'>Director  </label>
<input id='director' name='director' type='text' placeholder='Director'>

<label for='country'>Produced (country)  </label>
<input id='country' name='country' type='text' placeholder='Produced (country)'>

<label for='language'>Language  </label>
<input id='language' name='language' type='text' placeholder='Language'>

<label for='image_url'>Image URL  </label>
<input id='image_url' name='image_url' type='text' placeholder='url'>

<input id='submit' name='submit' type='submit'>

</form>

        <?
        if (isset($_POST['submit'])) {
            if (filter_var($_POST['year'], FILTER_VALIDATE_INT) &&
                filter_var($_POST['runtime'], FILTER_VALIDATE_INT) &&
                filter_var($_POST['image_url'], FILTER_VALIDATE_DOMAIN)) {
                $title = $_POST['title'];
                $runtime = $_POST['runtime'];
                $year = $_POST['year'];
                $director = $_POST['director'];
                $produced = $_POST['country'];
                $language = $_POST['language'];
                $image_url = $_POST['image_url'];
                }


            $query = $db->prepare('INSERT INTO `films` (`Title`, `Running time`, `Year`, `Director`, `Produced`, `Language`, `image_url`) VALUES (:title, :runtime, :year, :director, :country, :language, :image_url)');

            $query->bindParam(':title', $title);
            $query->bindParam(':runtime', $runtime);
            $query->bindParam(':year', $year);
            $query->bindParam(':director', $director);
            $query->bindParam(':country', $produced);
            $query->bindParam(':language', $language);
            $query->bindParam(':image_url', $image_url);

            $query->execute();
        }
        ?>
    </div>

</main>

<footer>

</footer>

</body>

</html>
