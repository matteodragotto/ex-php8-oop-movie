<?php
$thriller = new Genre("Thriller");
$scifi = new Genre("Sci-Fi");
$action = new Genre("Action");
$drama = new Genre("Drama");
$comedy = new Genre("Comedy");
$horror = new Genre("Horror");
$romance = new Genre("Romance");
$fantasy = new Genre("Fantasy");

$movies = [
  new Movie("Inception", "https://i.ebayimg.com/images/g/B8oAAOSw2fdg5A-h/s-l1200.jpg", 2010, "Christopher Nolan", 148, [$thriller, $scifi]),
  new Movie("The Matrix", "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSyuOWir5kYfmiz7NvxlFJzta4ib2-oaKCCoA&s", 1999, "The Wachowskis", 136, [$scifi, $thriller]),
  new Movie("Avengers: Endgame", "https://preview.redd.it/esea05pj84o21.jpg?width=640&crop=smart&auto=webp&s=d00beefa8e27448e4ddd422eb3500ae069adf0f1", 2019, "Anthony and Joe Russo", 181, [$action, $scifi, $fantasy]),
  new Movie("The Dark Knight", "https://m.media-amazon.com/images/M/MV5BMTMxNTMwODM0NF5BMl5BanBnXkFtZTcwODAyMTk2Mw@@._V1_FMjpg_UX1000_.jpg", 2008, "Christopher Nolan", 152, [$action, $thriller]),
  new Movie("Forrest Gump", "https://storage.googleapis.com/pod_public/750/266241.jpg", 1994, "Robert Zemeckis", 142, [$drama, $comedy]),
  new Movie("La La Land", "https://pad.mymovies.it/filmclub/2016/06/092/locandina.jpg", 2016, "Damien Chazelle", 128, [$romance, $drama]),
  new Movie("The Lord of the Rings: The Fellowship of the Ring", "https://m.media-amazon.com/images/M/MV5BNzIxMDQ2YTctNDY4MC00ZTRhLTk4ODQtMTVlOWY4NTdiYmMwXkEyXkFqcGc@._V1_.jpg", 2001, "Peter Jackson", 178, [$fantasy, $action]),
  new Movie("Pulp Fiction", "https://m.media-amazon.com/images/I/81UTs3sC5hL._AC_UF1000,1000_QL80_.jpg", 1994, "Quentin Tarantino", 154, [$drama, $comedy]),
  new Movie("Jaws", "https://upload.wikimedia.org/wikipedia/commons/thumb/4/40/Jaws_movie_poster.jpg/1200px-Jaws_movie_poster.jpg", 1975, "Steven Spielberg", 124, [$thriller, $horror])
];


$movies[0]->setRating(3);
$movies[1]->setRating(5);
$movies[2]->setRating(5);
$movies[3]->setRating(4);
$movies[4]->setRating(4);
$movies[5]->setRating(3);
$movies[6]->setRating(5);
$movies[7]->setRating(4);
$movies[8]->setRating(4);
