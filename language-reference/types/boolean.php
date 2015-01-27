<?php

$isLoggedIn = FALSE;
$enableDebug = TRUE;
$displayErrors = FALSE;

if ($isLoggedIn == TRUE) {
	//do something
}

if ($isLoggedIn == true) {
	//do something
}

if ($isLoggedIn) {
	//do something
}


var_dump((bool) "");
var_dump((bool) 1);
var_dump((bool) -2);
var_dump((bool) "foo");
var_dump((bool) 2.3e5);
var_dump((bool) array(12));
var_dump((bool) array());
var_dump((bool) "false");
var_dump((bool) "000");