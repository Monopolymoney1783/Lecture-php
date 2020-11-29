<?php

function run()
{
  if (!isset($_REQUEST['key'])) {
    return;
  }

  $loadedData = readFromData();
  
  if (array_key_exists($_REQUEST['key'], $loadedData)) {
    unset($loadedData[$_REQUEST['key']]);
    writeData($loadedData);
  }
}