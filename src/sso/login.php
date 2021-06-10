<?php
  session_start();

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $callback_url = $_POST['callback_url'];
    require_once 'token.php';
    if ($username == 'admin' && $password == 'admin') {
      $_SESSION['sso_username'] = 'admin';
      $data = [ 'token' => $token, 'callback_url' => $callback_url ];
      header('Content-type: application/json');
      echo json_encode($data);
    }
    else {
      http_response_code(401);
    }
  }
?>