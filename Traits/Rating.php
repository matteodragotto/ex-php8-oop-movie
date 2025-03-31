<?php

trait Rating
{
  public $rating;

  public function getRating()
  {
    return $this->rating;
  }

  public function setRating($_rating)
  {
    if ($_rating >= 1 && $_rating <= 5) {
      $this->rating = $_rating;
    } else {
      echo "Il rating deve essere tra 1 e 5!";
    }
  }
}
