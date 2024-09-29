<?php
    include_once "book.php";
    include_once "library.php";

    $library = new Library();

    $book1 = new Book("Le Pouvoir Illimité", "Tony Robbins", 1986) ;
    $book2 = new Book("Atomic Habits", "James Clear", 2018); 
    $book3 = new Book("Ego is the enemie", "Rayan holiday", 2016); 

    $library->addBook($book1);
    $library->addBook($book2);
    $library->addbook($book3);

    $library->listBooks();
?>
