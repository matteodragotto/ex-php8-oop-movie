<?php

class Movie
{
  public $title;
  public $year;
  public $genres;
  public $director;
  public $duration;

  public function getDirector()
  {
    return $this->director;
  }
}

$inception = new Movie();

$inception->title = "Inception";
$inception->year = 2015;
$inception->director = "Christopher Nolan";

var_dump($inception->getDirector());

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