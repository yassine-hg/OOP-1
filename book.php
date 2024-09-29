<?php

    class Book {
        public $title;
        public $author;
        public $yearPublished;
        public $isAvailable;

        public function __construct($title, $author, $yearPublished) {
            $this->title = $title;
            $this->author = $author;
            $this->yearPublished = $yearPublished;
            $this->isAvailable = true;  
        }

        public function borrowBook() {
            if ($this->isAvailable) {
                $this->isAvailable = false;
                echo "$this->title is now borrowed.\n";
            } else {
                echo "$this->title is already borrowed.\n";
            }
        }

        public function returnBook() {
            if (!$this->isAvailable) {
                $this->isAvailable = true;
                echo "$this->title is now returned.\n";
            } else {
                echo "$this->title was not borrowed.\n";
            }
        }

            public function displayInfo() {
            $status = $this->isAvailable ? 'Available' : 'Not Available';
            echo "$this->title was written by $this->author in $this->yearPublished. Status: $status\n";
        }
    }
?>
