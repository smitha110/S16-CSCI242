<?php
require('Faculty.php');
require('Faculty2.php');

use WinthropUniversity\Wingspan\Entity\Faculty;
use WinthropUniversity\DegreeWorks\Faculty as Faculty2;

$faculty1 = new Faculty(); //Faculty.php
$faculty2 = new Faculty2(); //Faculty2.php

$faculty1->doWork();
$faculty2->doOtherWork();
