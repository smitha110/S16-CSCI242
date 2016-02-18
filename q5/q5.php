<?php

/* BEGIN ANSWER SECTION */

require_once("Programmer.php");

$regularProgrammer = new Programmer();
echo $regularProgrammer->getGreeting();

/*
* If only you could make a CoolProgrammer that
* had everything the regular Programmer had...
* just cooler...
*/
$coolProgrammer = new Programmer();
//echo $coolProgrammer->getGreeting("Hey dude!");
//$coolProgrammer->getGreeting("Hey dude!");
//echo $coolProgrammer->override_function('getGreeting',"","return 'Hey dude!'");
echo $coolProgrammer->override_function('getGreeting',"return 'Hey dude!'");


/* END ANSWER SECTION */
