<?php

function redirectOnDel()
{
   $rredirectPaths = getRedirectPath();
  $path = $_SERVER['PATH_INFO'] ?? 'null';
  if (isset($rredirectPaths[$path])) {
    header('Location: ' . $rredirectPaths[$path]);
  }
}

function getRedirectPath(): array
{
  return [
    '/delete' => '/users',
  ];
}