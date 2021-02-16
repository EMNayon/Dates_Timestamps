<?php

    /*
    Unix timestamp is a long integer containing the number of seconds between the Unix Epoch (January 1 1970 00:00:00 GMT) and the time specified.
    */

    /*
    mktime = time format function
    mktime(hours, minute, second, month, day, year)
    */
    $timestamp = mktime(10,14,54, 7, 10, 1997);
    /*
    When use direct echo $timestamp,
    return string of numbers
    */
    //echo $timestamp;
    //we can use 'a' or 'A'
    echo date('d/m/Y h:i:s A ', $timestamp);
    //strtotime = we can change string to time in this function
    $timestamp2 = strtotime('7:00pm March 22 2021');
    /* 
    echo $timestamp2,
     return the string number.
    */
    //echo $timestamp2;
    $timestamp3 = strtotime('tomorrow');
    $timestamp4 = strtotime('next Friday');
    //Here, Days, Months, Years
    $timestamp5 = strtotime('+2 Days');
    //so we can use the date() function 
    echo date('d/m/Y h:i:s A ', $timestamp5);

?>