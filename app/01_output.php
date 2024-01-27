<?php
/* -------- Output & Comments ------- */
// echo 123, 'Hello, 10.5';

// print 123;
// print_r([1, 2, 3]);

// var_dump('Hello');
// var_dump(true);
// var_export('hello');

/*
  A .php file running on a server, can output both HTML and PHP code. There are multiple functions that can be used to output data to the browser.
*/

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>
    <?php echo 'Post one'; ?>
  </h1>
  <h2>
    <?= 'Post two'; ?>
  </h2>
</body>

</html>