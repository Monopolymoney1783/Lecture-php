<?php

/**
 * Записываем массив в файл
 */
function writeData(array $data)
{
  $filePath = $_SERVER['DOCUMENT_ROOT'] . DATA_FILE;

  if (!file_exists($filePath)) {
    return [];
  }

  file_put_contents($filePath, serialize($data));
}

/**
 * Читаем данные из файла и возвращаем массив
 */
function readFromData(): array
{
  $filePath = $_SERVER['DOCUMENT_ROOT'] . DATA_FILE;

  if (!file_exists($filePath)) {
    return [];
  }

  $fileData = file_get_contents($filePath);

  if (empty($fileData)) {
    return [];
  }

  return unserialize($fileData) ?? [];
}

function filteredData(array $data): array
{
  $age = $_GET['age'] ?? null;
  if (empty($age)) {
    return $data;
  }

  $filtered = [];
	foreach ($data as $key => $user) {
		if ($user['age'] == $age) {
			$filtered[$key] = $user;
		}
  }
  
	return $filtered;
}