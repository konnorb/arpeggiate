<?php
//displays errors, keep on while developing, then remove the line of code or comment out
ini_set('display_erroes', 'On');

define('APP_ROOT', __DIR__);
define('VIEW_ROOT', APP_ROOT . '/views');
define('BASE_URL', 'http://localhost/CMSarpeggiate');
//echo APP_ROOT;

$db = new PDO('mysql:host=localhost; dbname=arpeggiate', 'root', '');

require 'functions.php';

?>