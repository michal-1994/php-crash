<?php

/* -------- Loops & Iteration ------- */

/* ------------ For Loop ------------ */

/*
** For Loop Syntax
  for (initialize; condition; increment) {
  // code to be executed
  }
*/


/* ------------ While Loop ------------ */

/*
** While Loop Syntax
  while (condition) {
  // code to be executed
  }
*/


/* ---------- Do While Loop --------- */

/*
** Do While Loop Syntax
  do {
  // code to be executed
  } while (condition);

do...while loop will always execute the block of code once, even if the condition is false.
*/



/* ---------- Foreach Loop ---------- */

/*
** Foreach Loop Syntax
  foreach ($array as $value) {
  // code to be executed
  }
*/

// for ($x = 0; $x <= 10; $x++) {
//   echo "Number is $x";
//   echo "<br/>";
// }

$y = 2;

// while ($y <= 15) {
//   echo "Number $y <br />";
//   $y = $y + 2;
// }

$z = 1;

// do {
//   echo "$z <br />";
//   $z++;
// } while ($z <= 10);

// $array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13];
$array = ['one', 'two', 'three'];

// foreach ($array as $value) {
//   echo "Number $value <br />";
// }

// for ($i = 0; $i < count($array); $i++) {
//   echo "Number is " . $array[$i];
//   echo "<br/>";
// }

// foreach ($array as $item) {
//   echo $item . "<br />";
// }

// foreach($array as $key => $value) {
//   echo "Key: $key <br />Value: $value <hr />";
// }
