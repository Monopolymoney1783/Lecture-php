<?php

/**
 * Функция подключает файл шаблон в зависимости от пути,
 * содержашего код вывода
 */
function renderLayout()
{
  $path = $_SERVER['PATH_INFO'] ?? 'null';
  require_once PATH_LAYOUTS . (LAYOUTS[$path] ?? LAYOUTS['404']);
}