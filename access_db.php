<?php
$db = new PDO('mysql:host=db; dbname=my_films', 'root', 'password');

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$query = $db->prepare('SELECT * FROM `films`');
$query->execute();

$results = $query->fetchAll();

foreach ($results as $film){
    echo "<div class='item' style='background-image: url({$film['image_url']})'>";
    echo '<p>' . $film['Title'] . '</p>';
    echo '<p>' . $film['Director'] . '</p>';
    echo '<p>' . $film['Year'] . '</p>';
    echo '</div>';
}