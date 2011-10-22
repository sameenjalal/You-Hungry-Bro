<?php

// Load the Savant3 class file and create an instance.
require_once 'Savant3/Savant3.php';
$tpl = new Savant3();

// Create a title.
$name = "Computer labs!";

// Generate an array of food and places.
//$url = "http://www.nycgovparks.org/bigapps/DPR_Eateries_001.xml";

$comp_list;
if (file_exists('computer_lab.xml'));
{
	$comp_list = simplexml_load_file('computer_lab.xml');
	//print_r($foodlist);
}

// Assign values to the Savant instance.
$tpl->title = $name;
$tpl->body = $comp_list;

// Display a template using the assigned values.
$tpl->display('comp.tpl.php');
?>
