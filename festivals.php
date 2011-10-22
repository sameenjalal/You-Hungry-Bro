<?php

// Load the Savant3 class file and create an instance.
require_once 'Savant3/Savant3.php';
$tpl = new Savant3();

// Create a title.
$name = "Cool festivals in the area!";

// Generate an array of food and places.
//$url = "http://www.nycgovparks.org/bigapps/DPR_Eateries_001.xml";

// Generate an array of book authors and titles.
$festival_list = array(
    array(
        'name' => 'Adventures NYC',
        'season' => 'SUMMER',
        'desc' => 'Both novice and experienced enthusiasts are introduced to outdoor New York City adventures like canoeing, camping, hiking, and more.',
        'link' => 'http://www.nycgovparks.org/sub_things_to_do/events/output_pages/adventures_nyc.php'
    ),
    array(
        'name' => 'Citywide Bocce Tournament',
        'season' => 'FALL',
        'desc' => 'Both novice and experienced enthusiasts are introduced to outdoor New York City adventures like canoeing, camping, hiking, and more.',
        'link' => 'http://www.nycgovparks.org/sub_things_to_do/events/output_pages/adventures_nyc.php'
    ),
    array(
        'name' => 'Medieval Festival ',
        'season' => 'FALL',
        'desc' => "This festival brings to life the customs and spirit of the Middle Ages in Manhattan's Fort Tryon Park.",
        'link' => 'http://www.nycgovparks.org/sub_things_to_do/events/output_pages/medieval_festival.html'
    ),
    array(
        'name' => 'Pumpkin Festival',
        'season' => 'FALL',
        'desc' => 'Parks celebrates all things spooky each Halloween season in Central Park.',
        'link' => 'http://www.nycgovparks.org/sub_things_to_do/upcoming_events/events_search.php?id=37986'
    ),
    array(
        'name' => 'Winter Jam NYC',
        'season' => 'WINTER',
        'desc' => 'Features pro snowboarding athletes, cross country skiing, snowshoeing, and tube sledding, as well as an ice-climbing wall and warming hut!',
        'link' => 'http://www.nycgovparks.org/sub_things_to_do/events/winterjam/index.html'
    ),
    array(
        'name' => 'Street Games',
        'season' => 'SPRING',
        'desc' => 'A day dedicated to the enjoyment and celebration of classic games like stick ball, stoop ball, box ball, skully, pogo sticks, and more!',
        'link' => 'http://www.nycgovparks.org/sub_things_to_do/events/output_pages/street_games.html'
    ),
    array(
        'name' => 'Citywide Beach Volleyball Tournament',
        'season' => 'SUMMER',
        'desc' => 'Coney Island hosts the largest free amateur beach volleyball competition on the East Coast.',
        'link' => 'http://www.nycgovparks.org/sub_things_to_do/events/output_pages/beach_volleyball_tournament.php'
    ),
);



// Assign values to the Savant instance.
$tpl->title = $name;
$tpl->body = $festival_list;

// Display a template using the assigned values.
$tpl->display('festival.tpl.php');
?>
