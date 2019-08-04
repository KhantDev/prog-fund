<?php 
function autoload($className)
{
	$file = __NAMESPACE__."$className.php";
	if (is_readable($file)){
		include $file;
	}
}

spl_autoload_register("autoload");