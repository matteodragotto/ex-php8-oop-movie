<?php

require_once "./Traits/Rating.php";

require_once "./Models/Genre.php";
require_once "./Models/Movie.php";

$thriller = new Genre("Thriller");
$scifi = new Genre("Sci-Fi");
$action = new Genre("Action");
$drama = new Genre("Drama");
$comedy = new Genre("Comedy");
$horror = new Genre("Horror");
$romance = new Genre("Romance");
$fantasy = new Genre("Fantasy");

$inception = new Movie("Inception", 2015, "Christopher Nolan", 143, [$thriller]);
$matrix = new Movie("The Matrix", 1999, "The Wachowskis", 136, [$scifi, $thriller]);


$inception->setRating(3);
$matrix->setRating(5);


var_dump($inception);
var_dump($matrix)

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <title>PHP - OOP</title>
</head>

<body>
  <div class="container-fluid py-5">
    <h1 class="fw-bolder">MOVIES</h1>
  </div>
</body>

</html>