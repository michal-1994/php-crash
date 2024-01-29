<?php

$string = "Hello World";

// echo $string;

// echo strlen($string);
// echo strpos($string, 'o');
// echo strrev($string);
// echo strtoupper($string);
// echo str_replace('World', 'Everyone', $string);
// echo substr($string, 0, 5);
// echo substr($string, 5);

if (str_starts_with($string, "Hello")) {
  // echo 'YES';
}

if (str_ends_with($string, "World")) {
  // echo 'YES';
}

$string2 = '<script>alert(1)</script>';
// echo htmlspecialchars($string2);
// echo $string2;

printf('%s likes to %s', 'Brad', 'code');
