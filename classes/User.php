<?php

class User {
  public $name;
  public $lastname;
  public $email;
  public $nickname;
  public $password;
  public $avatar;

  public function __construct(string $name, string $lastname, string $email, string $nickname, string $password)
    {
      $this -> name = $name;
      $this -> lastname = $lastname;
      $this -> email = $email;
      $this -> nickname = $nickname;
      $this -> password = $password;
    }

  public function setAvatar(string $avatar){
    $this -> avatar = $avatar;
  }
}

?>
