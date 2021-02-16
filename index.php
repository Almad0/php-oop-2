<?php

  include __DIR__ . '/classes/User.php';
  include __DIR__ . '/classes/Post.php';

  $utenti =
  [
    new User("Michele", "Almanacco", "Michi.al@gmail.com", "Michi", "1234password"),
    new User("Carmelo", "Genova", "Carmelo@gmail.com", "CG", "passwordSicurissima"),
    new User("Amico", "Caro", "A.caro@gmail.com", "AmicoCaro", "ssword"),
    new User("Pingu", "Pinguino", "Pingu.blubbla@gmail.com", "Pingu", "Mangm4"),
  ];

var_dump($utenti);
?>
