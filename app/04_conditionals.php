<?php

$age = 17;

// if ($age >= 18) {
//   echo "You are old enough to vote";
// } else {
//   echo "Sorry, you are not old enough to vote";
// }

// $t = date("H");
$t = 15;

// if ($t < 12) {
//   echo "Good morning";
// } elseif ($t < 17) {
//   echo "Good Afternoon";
// } else {
//   echo "Good Evening";
// }

$posts = ['Fist post'];
// $posts = [];

// if (!empty($posts)) {
//   echo 123;
// } else {
//   echo 'No posts';
// }

// echo !empty($posts) ? $posts[0] : "No posts";

// $firstPost = !empty($posts) ? $posts[0] : "No post";
$firstPost = $posts[0] ?? null;

// echo $firstPost;

$favcolor = 'blue';

// switch ($favcolor) {
//   case 'red':
//     echo 'Your favorite color is red';
//     break;
//   case 'blue':
//     echo 'Your favorite color is red';
//     break;
//   default:
//     echo "You don't choose your favourite color";
// }
