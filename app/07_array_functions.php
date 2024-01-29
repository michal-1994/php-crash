<?php

$fruits = ['apple', 'orange', 'pear', 'strawberry'];

// echo count($fruits);

// var_dump(in_array('apples', $fruits));

// $fruits[] = 'grape';
// array_push($fruits, 'blueberry', 'apple');
// array_unshift($fruits, 'mango');

// print_r($fruits);

// echo '<hr />';

// echo array_pop($fruits);
// echo array_shift($fruits);
// echo '<hr />';
// unset($fruits[2]);
// print_r($fruits);

// $chunked_array = array_chunk($fruits, 2);

// print_r($chunked_array);

$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];

$arr3 = array_merge($arr1, $arr2);
$arr4 = [...$arr1, ...$arr2];

// print_r($arr4);

$a = ['green', 'red', 'yellow'];
$b = ['avocado', 'apple', 'banana'];

$c = array_combine($a, $b);

// print_r($c);

// $keys = array_keys($c);

// print_r($keys);

// $values = array_values($c);

// print_r($values);

// $flipped = array_flip($c);

// print_r($flipped);

$numbers = range(1, 20);

// print_r($numbers);

$newNumbers = array_map(function ($number) {
  return "Number $number";
}, $numbers);

// print_r($newNumbers);

$lessThan10 = array_filter($numbers, function ($number) {
  return $number <= 10;
});

// print_r($lessThan10);

$sum = array_reduce($numbers, function ($sum, $number) {
  return $sum + $number;
});

// print_r($sum);
var_dump($sum);
