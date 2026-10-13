<?php
require_once 'Book.php';

class Library {
    protected $books = [];

    public function addBook(Book $book) {
        $this->books[$book->id] = $book;
    }

    public function removeBook($id) {
        if (isset($this->books[$id])) {
            unset($this->books[$id]);
        }
    }

    public function getBooks() {
        return $this->books;
    }
}
