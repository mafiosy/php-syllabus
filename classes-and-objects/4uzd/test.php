<?php

include "movie.php";

$movie1 = new Movie('Casino Royale', 'Eon Productions', 'PG13');
$movie2 = new Movie('Glass', 'Buena Vista International', 'PG13');
$movie3 = new Movie('Spider-Man: Into the Spider-Verse', 'Columbia Pictures', 'PG');

$movies = [];
array_push($movies, $movie1, $movie2, $movie3);

var_dump($movie1->getPG($movies));