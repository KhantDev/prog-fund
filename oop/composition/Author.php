<?php 
class Author 
{
	 //using array to allow multiple authors
	 private $books = array();
	 private $name;
	 private $email;

	 public function __construct($name,$email)
	 {
		  $this->name = $name;
		  $this->email = $email;
	 }

	 public function getName()
	 {
		  return $this->name;
	 }

	 public function getEmail()
	 {
		  return $this->email;
	 }
	 public function addBook($name,$price)
	 {
		  $this->books[] = new Book($name,$price);     
	 }

	 public function getBooks()
	 {
		  return $this->books;
	 }

}