<?php

// Load the Savant3 class file and create an instance.
require_once 'Savant3/Savant3.php';
$tpl = new Savant3();

// Create a title.
$name = "Swimming Pools!";

$comp_list;
if (file_exists('pool.xml'));
{
	$comp_list = simplexml_load_file('pool.xml');
}

// Assign values to the Savant instance.
$tpl->title = $name;
$tpl->body = $comp_list;

// Display a template using the assigned values.
$tpl->display('pool.tpl.php');
?>
