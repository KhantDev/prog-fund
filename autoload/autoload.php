<?php 
function controller($className)
{
	$file = "controller/".$className.".php";
	if (is_readable($file)){
		include $file;
	}
}

function model($className)
{
	$file = "model/".$className.".php";
	if (is_readable($file)) {
		include $file;
	}
}

spl_autoload_register("controller");
spl_autoload_register("model");