<?php
class Book {
    public $id;
    public $title;
    public $author;
    public $isAvailable;

    public function __construct($id, $title, $author) {
        $this->id = $id;
        $this->title = $title;
        $this->author = $author;
        $this->isAvailable = true;
    }
}
