<?php 
include 'Author.php';
include 'Book.php';

$author = new Author('Chit Oo Nyo','chitoo@gmail.com');
$author -> addBook('Linkar Depa',500);
$author -> addBook('Ngatakpya',600);

/* print author info */
echo $author -> getName();
echo "<br>";
echo $author -> getEmail();
echo "<br>";

/* print author's books info */
$books = $author -> getBooks();  //Array of books
foreach ($books as $book) {
	 echo $book -> getName();
	 echo "<br>";
	 echo $book -> getPrice();
	 echo "<br>";
}