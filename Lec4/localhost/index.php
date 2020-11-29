<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Index</title>
</head>
<body>
<?php
switch($_SERVER['PATH_INFO']) {
//Добавить пользователя
    case "/add":
        require 'add.php';
        break;
//Пользователи
    case "/users":
        require 'users.php';
        break;
//Удаление
    case "/delete":
        require 'delete.php';
        break;
    default:
        require 'home.php';
};
?>
</body>
</html>
