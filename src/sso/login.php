<?php
  session_start();
  $token = bin2hex(random_bytes(16));
  $iv = bin2hex(random_bytes(8));
  $crypted = openssl_encrypt($token, "AES-128-CBC", "secretkey", 0, $iv);
  $message = base64_encode($iv.$crypted);

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $callback_url = $_POST['callback_url'];
    if ($username == 'admin' && $password == 'admin') {
      $_SESSION['sso_username'] = 'admin';
      $_SESSION['sso_token'] = $message;
      $data = [ 'token' => $message, 'callback_url' => $callback_url ];
      header('Content-type: application/json');
      echo json_encode($data);
    }
    else {
      http_response_code(401);
    }
  }
?>