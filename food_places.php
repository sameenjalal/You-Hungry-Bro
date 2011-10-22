<?php

// Load the Savant3 class file and create an instance.
require_once 'Savant3/Savant3.php';
$tpl = new Savant3();

// Create a title.
$name = "Cool places to eat!";

// Generate an array of food and places.
//$url = "http://www.nycgovparks.org/bigapps/DPR_Eateries_001.xml";

$foodlist;
if (file_exists('food_places.xml'));
{
	$foodlist = simplexml_load_file('food_places.xml');
	//print_r($foodlist);
}

// Assign values to the Savant instance.
$tpl->title = $name;
$tpl->body = $foodlist;

// Display a template using the assigned values.
$tpl->display('food.tpl.php');
?>
