<?php

/**
 * Функция выдачи файла из папки files
 * в html чтобы подключить картинку нужно в src прописать следующее
 * <img src="/file?file_name=delete.png" >
 */
function run()
{
  $fileName = $_GET['file_name'] ?? '';

  if (empty($fileName)) {
    exit;
  }

  $serverPath = $_SERVER['DOCUMENT_ROOT'];
  $filePath = $serverPath . '/files/' . $fileName;

  if (!file_exists($filePath)) {
    exit;
  }

  // если этого не сделать файл будет читаться в память полностью!
  if (ob_get_level()) {
    ob_end_clean();
  }
  // заставляем браузер показать окно сохранения файла
  header('Content-Description: File Transfer');
  header('Content-Type: application/octet-stream');
  header('Content-Disposition: attachment; filename=' . basename($filePath));
  header('Content-Transfer-Encoding: binary');
  header('Expires: 0');
  header('Cache-Control: must-revalidate');
  header('Pragma: public');
  header('Content-Length: ' . filesize($filePath));
  // читаем файл и отправляем его пользователю
  readfile($filePath);
  exit;
}
