<?php
/*
* @package   	PDQ (Pretty 'n' Damn Quick) PHP Toolkit
* @version    4.2
* @author     Hendrik Eduard Kuiper
* @copyright  Hendrik Eduard Kuiper
* @link       
* @copyright 	Copyright (c) 2006 - 2019
* @license 		http://opensource.org/licenses/MIT	MIT License
* @since 			Version 1
*/

date_default_timezone_set('Europe/Amsterdam');

/* 
* calculate the sunset time for Amsterdam, The Netherlands
* Latitude: 52.4 North
* Longitude: 4.9 East
*/

$sun = date_sun_info(strtotime("today"), 52.4, 4.9);
$sunrise = date("H:i", $sun['sunrise']);
$sunset =  date("H:i", $sun['sunset']);

echo "Welcome to Amsterdam<br>Sunrise today is at {$sunrise}<br>Sunset today is at {$sunset}<br>";
/* 
Welcome to Amsterdam
Sunrise today is at 08:17
Sunset today is at 17:30


