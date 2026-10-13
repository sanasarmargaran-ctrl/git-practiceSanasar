<?php
require_once 'Book.php';
require_once 'LibraryUser.php';

class Library {
    protected $books = [];
    protected $users = [];
    protected $loans = [];

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

    public function isAvailable($bookId) {
        return isset($this->books[$bookId]) && $this->books[$bookId]->isAvailable;
    }

    public function loanBook($bookId, $userId) {
        if ($this->isAvailable($bookId) && isset($this->users[$userId])) {
            $this->books[$bookId]->isAvailable = false;
            $this->loans[$bookId] = $userId;
            return true;
        }
        return false;
    }

    public function returnBook($bookId) {
        if (isset($this->loans[$bookId])) {
            $this->books[$bookId]->isAvailable = true;
            unset($this->loans[$bookId]);
            return true;
        }
        return false;
    }
}
