<?php
session_start();
$_SESSION = [];

//@unset($_COOKIE[session_name()]);
session_destroy();
foreach($_COOKIE as $key => $value){
  setcookie($key, '', time() - 3600, '/');
} 

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <a href="index.php">Главная</a>
  <h1>Вы успешно вышли</h1>
</body>
</html>