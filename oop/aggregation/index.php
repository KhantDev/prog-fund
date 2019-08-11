<?php 
include 'Author.php';
include 'Book.php';

$book = new Book('Linka Depa',500);
$author = new Author('Chit Oo Nyo','kelly@brainbell.com', $book);


echo $author->getName(); //Book Name
echo $author->getBook() -> getName(); //Kelly
echo $author->getBook() -> getPrice(); //kelly@brainbell.com