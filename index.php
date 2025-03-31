<?php

class Genres
{
  public $name;

  function __construct($_name)
  {
    $this->name = $_name;
  }
};

class Movie
{
  public $title;
  public $year;
  public $director;
  public $duration;
  public $genres;

  function __construct($_title, $_year, $_director, $_duration, $_genres)
  {
    $this->title = $_title;
    $this->year = $_year;
    $this->director = $_director;
    $this->duration = $_duration;
    $this->genres = $_genres;
  }

  public function getDirector()
  {
    return $this->director;
  }

  public function durationOverTwoHours()
  {
    return $this->duration > 120;
  }
}

$inception = new Movie("Inception", 2015, "Christopher Nolan", 143, "Thriller");

var_dump($inception);

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