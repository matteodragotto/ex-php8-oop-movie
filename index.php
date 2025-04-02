<?php

require_once "./Traits/Rating.php";

require_once "./Models/Genre.php";
require_once "./Models/Movie.php";

require_once "./db.php";

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">

  <!-- BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- FONTAWESOME -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>PHP - OOP</title>
</head>

<body class="bg-primary">
  <?php include('header.php'); ?>
  <div class="container py-2">
    <div class="row row-cols-4">
      <?php
      foreach ($movies as $movie) {
      ?>
        <div class="col mb-2">
          <div class="card">
            <img class="card-img" src=<?php echo $movie->poster ?> alt=<?php echo $movie->title ?> style="width: 100%; height: 460px; object-fit: cover; object-position: top;">
            <div class="card-body">
              <div class="overflow-auto p-1">
                <h5 class="card-title fw-bolder title-animation text-nowrap"><?php echo $movie->title ?></h5>
              </div>

              <span class="fw-bolder">Director: </span><span><?php echo $movie->director ?></span><br>
              <span class="text-success fw-bolder">Duration: </span><span class="text-success"><?php echo $movie->duration ?>'</span>
              <p class="mb-0"><?php echo $movie->printStars() ?></p>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</body>

</html>