<?php
/* ----------- Arrrays ----------- */

/*
  Arrays hold multiple values. Each value in an array is called an "element"
*/

$numbers = [1, 44, 55, 22];
$fruits = array('apple', 'orange', 'pear');

// print_r($numbers);
// print_r($fruits);
// var_dump($fruits);
// echo $fruits[2];

$colors = [
  1 => 'red',
  2 => 'blue',
  6 => 'green'
];

// echo $colors[6];

$hex = [
  'red' => '#f00',
  'blue' => '#0f0',
  'green' => '#00f'
];

// echo $hex['blue'];

$person = [
  'first_name' => 'Michał',
  'last_name' => 'Grzegorczyk',
  'email' => 'test@test.pl'
];

// echo $person['email'];

$people = [
  [
    'first_name' => 'Michał',
    'last_name' => 'Grzegorczyk',
    'email' => 'test@test.pl'
  ],
  [
    'first_name' => 'Tomasz',
    'last_name' => 'Kowalski',
    'email' => 'test1@test.pl'
  ],
  [
    'first_name' => 'Andrzej',
    'last_name' => 'Nowak',
    'email' => 'test2@test.pl'
  ]
];

// echo $people[0]['first_name'];

$json_encoded_people = json_encode($people);

// var_dump($json_encoded_people);

$json_decoded_people = json_decode($json_encoded_people);

var_dump($json_decoded_people);