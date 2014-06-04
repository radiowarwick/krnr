<?php

define('DATABASE_HOST', 'localhost');
define('DATABASE_PORT', '5432');
define('DATABASE_NAME', 'krnr');

define('SITE_BRAND', 'RaW 1251AM');

$root = explode('/', $_SERVER['DOCUMENT_ROOT']);
$dir = explode('/', substr(__DIR__,0,-8));
define('LINK_ABS', '/'.implode('/',array_diff($dir,$root)));
unset($root,$dir);

function __autoload($class_name) {
	require_once ($class_name . '.php');
}
$template = TRUE;

ob_start(array('Template','output'));

?>