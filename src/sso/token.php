<?php
  $iv = '0000000000000000';
  $token = bin2hex(random_bytes(8));
  $time = time() + 30; //kadaluarsa token 30 detik
  $token = openssl_encrypt($token . $time, "AES-128-CBC", "secretkey", 0, $iv);
?>