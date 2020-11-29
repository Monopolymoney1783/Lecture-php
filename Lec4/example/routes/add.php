<?php
session_start()
?>
<ul class="nav flex-column">
    <li class="nav-item">
        <a class="nav-link active"" href="/users"> Users </a>
    </li>
</ul>
<form class="form-group" action="add" method="POST">
    <input name="id" class="form-control" placeholder="Идентификатор пользователя" type="text"> <br>
    <input name="surname" class="form-control"  placeholder="Фамилия" type="text"> <br>
    <input name="name" class="form-control"  placeholder="Имя" type="text"> <br>
    <input name="age" class="form-control"  placeholder="Возраст" type="text"> <br>
    <button type="submit" class="btn btn-primary" name="submit"> Отправить </button>
</form>
<br>
<?php
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