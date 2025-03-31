<?php

class Movie
{
  public $title;
  public $poster;
  public $year;
  public $director;
  public $duration;
  public $genres;

  use Rating;

  function __construct($_title, $_poster, $_year, $_director, $_duration, array $_genres)
  {
    $this->title = $_title;
    $this->poster = $_poster;
    $this->year = $_year;
    $this->director = $_director;
    $this->duration = $_duration;
    $this->genres = $_genres;
  }

  public function getTitle()
  {
    return $this->title;
  }

  public function durationOverTwoHours()
  {
    return $this->duration > 120;
  }
}
