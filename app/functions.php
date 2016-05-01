<?php

function e($text) {
	return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
}

function br2nl($string)
{
    return preg_replace('/\<br(\s*)?\/?\>/i', "\n", $string);
} 

?>