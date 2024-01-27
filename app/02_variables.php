<?php

/* ----- Variables & Data Types ----- */

/* --------- PHP Data Types --------- */
/*
- String - A string is a series of characters surrounded by quotes
- Integer - Whole numbers
- Float - Decimal numbers
- Boolean - true or false
- Array - An array is a special variable, which can hold more than one value
- Object - A class
- NULL - Empty variable
- Resource - A special variable that holds a resource
*/

/* --------- Variable Rules --------- */
/*
- Variables must be prefixed with $
- Variables must start with a letter or the underscore character
- variables can't start with a number
- Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
- Variables are case-sensitive ($name and $NAME are two different variables)
*/

$name = 'Michał';
$age = 30;
$has_kids = false;
$cash_on_hand = 20.75;

// echo $name;
// echo '<br/>';
// echo $age;
// echo '<br/>';
// var_dump($has_kids);
// echo '<br/>';
// echo $cash_on_hand;

// echo "$name is $age years old<br/>";
// echo $name . ' is ' . $age . ' years old<br/>';
// echo "${name} is ${age} years old<br/>"; // deprecated

$x = '5' + 5;
// var_dump($x);
// echo 10 -5;
// echo 5 * 6;
// echo 10 / 3;
// echo 10 % 4;

define('HOST', 'localhost');
define('DB_NAME', 'dev_db');

echo HOST;
