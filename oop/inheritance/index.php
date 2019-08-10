<?php
//Miltiple interitance
require 'A.php';
require 'B.php';
require 'C.php';

$c_class = new C;
$c_class-> sayAclass();
$c_class-> sayBclass();
$c_class-> sayCclass();