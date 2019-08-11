<?php 
class Author 
{
	 private $book;                           
	 private $name;
	 private $email;

	 public function __construct( $name, $email , $book)
	 {
		  $this->name = $name;
		  $this->email = $email;
		  $this->book = $book;
	 }
	 public function getName( )
	 {
		  return $this->name;
	 }
	 public function getEmail( )
	 {
		  return $this->email;
	 }
	 public function getBook( )
	 {
		  return $this->book;
	 }
}
