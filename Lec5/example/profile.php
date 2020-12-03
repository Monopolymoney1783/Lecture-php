<?php

session_start();

$loginSession = $_SESSION['login'] ?? null;

// $currentClicks = $_COOKIE['clicks'] ?? 0;
// setcookie('clicks', $currentClicks + 1);


define('ENCRYPTION_KEY', 'ab86d144e3f080b61c7c2e43');
$currentClicks = $_COOKIE[md5('clicks')] ?? 0;
if (!empty($currentClicks)) {
  // Decrypt
  $c = base64_decode($currentClicks);
  $ivlen = openssl_cipher_iv_length($cipher="AES-128-CBC");
  $iv = substr($c, 0, $ivlen);
  $hmac = substr($c, $ivlen, $sha2len=32);
  $ciphertext_raw = substr($c, $ivlen+$sha2len);
  $plaintext = openssl_decrypt($ciphertext_raw, $cipher, ENCRYPTION_KEY, $options=OPENSSL_RAW_DATA, $iv);
  $calcmac = hash_hmac('sha256', $ciphertext_raw, ENCRYPTION_KEY, $as_binary=true);
  if (hash_equals($hmac, $calcmac)){
    $currentClicks = $plaintext;
  }
}
// Encrypt
$countClickcks = $currentClicks + 1;

$ivlen = openssl_cipher_iv_length($cipher="AES-128-CBC");
$iv = openssl_random_pseudo_bytes($ivlen);
$ciphertext_raw = openssl_encrypt($countClickcks, $cipher, ENCRYPTION_KEY, $options=OPENSSL_RAW_DATA, $iv);
$hmac = hash_hmac('sha256', $ciphertext_raw, ENCRYPTION_KEY, $as_binary=true);
$ciphertext = base64_encode( $iv.$hmac.$ciphertext_raw );

setcookie(md5('clicks'), $ciphertext);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <a href="index.php">Главная</a><br>
  <?php if (is_null($loginSession)): ?>
    вы не авторизованы
  <?php else : ?>
    Юлия самай красивая девушка на свете
  <?php endif; ?>
  <h1>Кликов: <?= $currentClicks ?></h1>
</body>
</html>