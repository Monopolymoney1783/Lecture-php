<?php

/**
 * Функция, которая подключает файл с функцией run()
 * Подключение происходит в зависимости от пути, по которому переходит пользователь
 */
function handlerRun()
{
  $path = $_SERVER['PATH_INFO'] ?? 'null';
  require_once PATH_HANDLERS . (HANDLERS[$path] ?? HANDLERS['default']);
  run();
}