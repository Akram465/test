<?php
/*
Practice query using the moviedb :
1. Connect to DB and choose the moviedb
2. Go to SQL tab and run a query to get all movies by George Lucas
3. Display the movies in a HTML <table>
    You should display title, views, the poster and the name of the director.*/





$instrument = array();


$conn = mysqli_connect('localhost', 'root', '', 'movie_db');
echo "connected <br>";

if ($conn) {
    $query = ' SELECT *
    FROM movies
    INNER JOIN directors
    ON movies.director_id = directors.director_id';
    $results = mysqli_query($conn, $query);
    $movies = mysqli_fetch_all($results, MYSQLI_ASSOC);
} else {
    echo 'Pb with connection !';
} ?>

<table border="1">
    <tr>
        <th>title</th>
        <th>views</th>
        <th>director name</th>
        <th>poster</th>


    </tr>

    <?php foreach ($movies as $movie) : ?>
        <table border="1">

            <tr>

                <td> <?= $movie['title'] ?></td>
                <td> <?= $movie['views'] ?></td>
                <td> <?= $movie['director_id'] ?></td>

                <td> <?= $movie['poster'] ?></td>

            </tr>
        </table>
    <?php endforeach; ?>

    <?php
