<?php

// Load the Savant3 class file and create an instance.
require_once 'Savant3/Savant3.php';
$tpl = new Savant3();

// Create a title.
$name = "Playgrounds!";

// Generate an array of food and places.
//$url = "http://www.nycgovparks.org/bigapps/DPR_Eateries_001.xml";

$list;
if (file_exists('playground.xml'));
{
	$list = simplexml_load_file('playground.xml');
	//print_r($foodlist);
}

// Assign values to the Savant instance.
$tpl->title = $name;
$tpl->body = $list;

// Display a template using the assigned values.
$tpl->display('play.tpl.php');
?>
