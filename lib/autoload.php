<?php
/** 
 * @author Jefferson González
 * @license MIT
*/

// Register class auto-loader
function cms_autoloader($class_name)
{
	$file = str_replace('\\', '/', $class_name) . '.php';

	include('lib/'.strtolower($file));
}

spl_autoload_register('cms_autoloader');
?>
