<?php

function inverse($x)
{
  if (!$x) {
    throw new Exception("Division by zero");
  }

  return 1 / $x . '<br />';
}

try {
  echo inverse(5);
  echo inverse(0);
  echo inverse(2);
} catch (Exception $e) {
  echo 'Exception: ' . $e->getMessage();
} finally {
  echo '<br />First Finally';
}
