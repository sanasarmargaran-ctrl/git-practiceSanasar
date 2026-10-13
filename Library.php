<?php
require_once 'Book.php';
require_once 'LibraryUser.php';

class Library {
    protected $books = [];
    protected $users = [];

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

    public function searchByTitle($title) {
        $found = [];
        foreach ($this->books as $book) {
            if (stripos($book->title, $title) !== false) {
                $found[] = $book;
            }
        }
        return $found;
    }

    public function addUser(LibraryUser $user) {
        $this->users[$user->id] = $user;
    }
}
