<?php

include_once __DIR__ . '/User.php';

class Post extends User {
    public $title;
    public $text;
    public $date;
    public $tag;

    public function __construct(string $nickname, string $title, string $text, string $date, mixed $tag) {
        parent::__construct($nickname);
        $this -> title = $title;
        $this -> text = $text;
        $this -> date = $date;
        $this -> tag = $tag;
    }
}


?>
