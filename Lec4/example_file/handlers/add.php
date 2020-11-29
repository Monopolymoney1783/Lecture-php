<?php

function run()
{
  if (!isset($_POST["submit"])) {
    return;
  }

  $userData = [
    'id'      => $_POST['id'] ?? '',
    'surname' => $_POST['surname'] ?? '',
    'name'    => $_POST['name'] ?? '' ,
    'age'     => $_POST['age'] ?? ''
  ];

  $loadedData = readFromData();
  $loadedData = $loadedData;
  $lastKey = array_key_last($loadedData);

  if (is_null($lastKey)) {
    $id = 0;
  } else {
    $id = $loadedData[$lastKey]['id'];
    $id++;
  }

  $userData['id'] = $id;
  $loadedData['id_' . $id] = $userData;

  writeData($loadedData);
}