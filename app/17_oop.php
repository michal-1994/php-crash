<?php

class User
{
  public $name;
  public $email;
  public $password;

  public function __construct($name, $email, $password)
  {
    $this->name = $name;
    $this->email = $email;
    $this->password = $password;
  }

  function set_name($name)
  {
    $this->name = $name;
  }

  function get_name()
  {
    return $this->name;
  }

  function get_email()
  {
    return $this->email;
  }
}

$user1 = new User('Michał', 'michal@test.pl', 'password1');
$user2 = new User('Tomek', 'tomek@test.pl', 'password2');
$user3 = new User('Andrzej', 'andrzej@test.pl', 'password3');

// echo $user2->get_name() . '<br />';
// echo $user3->get_name() . '<br />';
// echo $user1->get_name() . '<br />';

class Employee extends User
{
  public function __construct($name, $email, $password, $title)
  {
    parent::__construct($name, $email, $password);
    $this->title = $title;
  }

  public function get_title()
  {
    return $this->title;
  }
}

$employee1 = new Employee('Michał', 'michal@test.pl', 'password1', 'programmer');

echo $employee1->get_title() . '<br />';
echo $employee1->get_name() . '<br />';
echo $employee1->get_email() . '<br />';
