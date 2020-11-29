<?php

function requireRoute()
{
  $routes = getRoutes();
  $path = $_SERVER['PATH_INFO'] ?? 'null';
  require_once '/var/www/routes/' . $routes[$path];
}

function getRoutes(): array
{
  return [
    '/add'    => 'add.php',
    '/users'  => 'users.php',
    '/delete' => 'delete.php',
    'null'    => 'home.php'
  ];
}