<?php
require_once('access_db.php');

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $runtime = filter_var($_POST['runtime'], FILTER_VALIDATE_INT) ?: null;
    $year = filter_var($_POST['year'], FILTER_VALIDATE_INT) ?: null;
    $director = $_POST['director'];
    $produced = $_POST['country'];
    $language = $_POST['language'];
    $image_url = filter_var($_POST['image_url'], FILTER_VALIDATE_URL) ?: null;
    if (isset($_POST['favourite'])){
        $favourite = ($_POST['favourite']=='on') ? 'Y' : '';
    }



    $query = $db->prepare('INSERT INTO `films` (`Title`, `Running time`, `Year`, `Director`, `Produced`, `Language`, `image_url`, `favourite`) VALUES (:title, :runtime, :year, :director, :country, :language, :image_url, :favourite)');

    $query->bindParam(':title', $title);
    $query->bindParam(':runtime', $runtime);
    $query->bindParam(':year', $year);
    $query->bindParam(':director', $director);
    $query->bindParam(':country', $produced);
    $query->bindParam(':language', $language);
    $query->bindParam(':image_url', $image_url);
    $query->bindParam(':favourite', $favourite);

    $query->execute();
    header('Location: index.php');
}

