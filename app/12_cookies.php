<?php

setcookie("name", "Brad", time() + 864);

if (isset($_COOKIE["name"])) {
  echo $_COOKIE["name"];
}
