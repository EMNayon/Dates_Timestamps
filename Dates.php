<?php

//echo date('d'); //Day
//echo date('m'); //Month
//echo date('Y'); //Year
/*Lowercase L */
echo date('l '); //Day of the week

/* Date, Time and Year different format */
//echo date('Y/m/d');
echo date('m-d-Y ');

//echo date('h'); //Hour
//echo date('i'); //Min
//echo date('s'); //Seconds
//echo date('a'); //AM or PM

/*Time set for Bangladesh */
date_default_timezone_set('Asia/Dhaka');
echo date('h:i:s A');
?>