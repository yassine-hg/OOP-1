<?php

    class Library {
        public $books = [];

        public function addBook($book) {
            $this->books[] = $book;
            echo "Book added: \"$book->title\" by $book->author (Published in $book->yearPublished)\n";
        }

        public function listBooks() {
            echo "Listing all books:\n";
            foreach ($this->books as $book) {
                $book->displayInfo();
            }
        }
    }
?>
