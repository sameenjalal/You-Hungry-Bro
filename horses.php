<?php

// Load the Savant3 class file and create an instance.
require_once 'Savant3/Savant3.php';
$tpl = new Savant3();

// Create a title.
$name = "Tryna Horseback Ride Bro?";

$comp_list;
if (file_exists('horses.xml'));
{
	$comp_list = simplexml_load_file('horses.xml');
}

// Assign values to the Savant instance.
$tpl->title = $name;
$tpl->body = $comp_list;

// Display a template using the assigned values.
$tpl->display('horses.tpl.php');
?>
