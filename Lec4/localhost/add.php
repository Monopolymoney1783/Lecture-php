<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Add users</title>
    <style>
        input{
            margin-bottom: 10px;
            width: 200px;
        }
        form{
            width: 300px;
            padding: 10px;
        }
    </style>
</head>
<body>
<form class="form-group" action="add" method="POST">
    <input name="id" class="form-control" placeholder="Идентификатор пользователя" type="text"> <br>
    <input name="surname" class="form-control"  placeholder="Фамилия" type="text"> <br>
    <input name="name" class="form-control"  placeholder="Имя" type="text"> <br>
    <input name="age" class="form-control"  placeholder="Возраст" type="text"> <br>
    <button type="submit" class="btn btn-primary" name="submit"> Отправить </button>
</form>
<br>
<?php
$UserData = array(
    'id' => "" . $_POST["id"] . "",
    'surname' => "" . $_POST["surname"] . "",
    'name' => "" . $_POST["name"] . "",
    'age' => "" . $_POST["age"] . ""
);
if (isset($_POST["submit"])){
    if (!isset($_SESSION['0j'])) {
        $_SESSION['0j'] = array();
    }
    array_push($_SESSION['0j'], $UserData);
}
//file_put_contents('data.txt', serialize($_SESSION['0j']));
//$listUsers = file_get_contents('data.txt');
//$result = unserialize($listUsers);
//var_dump($result);
?>
</body>
</html>
