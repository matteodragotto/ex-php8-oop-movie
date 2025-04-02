<?php

trait Rating
{
  protected $rating;

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

  public function printStars()
  {
    $maxRating = 5;
    $fullRating = $maxRating - $this->rating;

    return str_repeat("<i class='fa-solid fa-star'></i>", $this->rating) . str_repeat("<i class='fa-regular fa-star'></i>", $fullRating);
  }
}
