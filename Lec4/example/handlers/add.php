<?php

function run()
{
    $UserData = [
    'id' => "" . $_POST["id"] . "",
    'surname' => "" . $_POST["surname"] . "",
    'name' => "" . $_POST["name"] . "",
    'age' => "" . $_POST["age"] . ""
  ];
  if (isset($_POST["submit"])){
    if (!isset($_SESSION['0j'])) {
        $_SESSION['0j'] = array();
    }
    array_push($_SESSION['0j'], $UserData);
  }
}