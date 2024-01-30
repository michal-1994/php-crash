<?php

$file = 'extras/users.txt';

if (file_exists($file)) {
  $handle = fopen($file, 'r');
  $contents = fread($handle, filesize($file));

  fclose($handle);
  echo $contents;
} else {
  $handle = fopen($file, 'w');
  $contents = 'Brad' . PHP_EOL . 'Sara' . PHP_EOL . 'Tom' . PHP_EOL . 'Mike';

  fwrite($handle, $contents);
  fclose($handle);
}
