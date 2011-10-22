<?php

// Load the Savant3 class file and create an instance.
require_once 'Savant3/Savant3.php';
$tpl = new Savant3();

// Create a title.
$name = "Find Beaches near you!";

$comp_list;
if (file_exists('beach.xml'));
{
	$comp_list = simplexml_load_file('beach.xml');
}

// Assign values to the Savant instance.
$tpl->title = $name;
$tpl->body = $comp_list;

// Display a template using the assigned values.
$tpl->display('beach.tpl.php');
?>
