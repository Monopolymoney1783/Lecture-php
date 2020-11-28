<?php
session_start();
// Проверяет, присутствует ли в массиве указанный ключ.
if (array_key_exists($_REQUEST['key'], $_SESSION['0j'])) {
    //echo "Массив содержит указанный ключ - ".''.$_REQUEST['key'].'';
    unset($_SESSION['0j'][$_REQUEST['key']]);
}
