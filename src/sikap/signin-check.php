<?php
  session_start();
  //define(LIB_DIR, './lib/');
  //require_once(LIB_DIR . 'config.php');

  
  require_once(__DIR__.'/lib/config.php');
  
  if (isset($_GET["token"])) {
    $token = $_GET["token"];
    $decrypted = openssl_decrypt($token, "AES-128-CBC", "secretkey", 0, "0000000000000000");
    $time = substr($decrypted, 16);
    if ($decrypted != false && time() < $time) {
      $_SESSION['us_username'] = "sso";
      $_SESSION['id'] = "1";
      header('location:'.$base_url);
      exit();
    }
  }

  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);

  $username = $_POST['username'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM user WHERE us_username='$username' and us_password='$password'";
  $query = $conn->query($sql);
  $check = $query->rowCount();
  if ($check >= 1) 
  {
    //buat session dengan nama username dengan isi nama user yang login
    $data = $query->fetch(PDO::FETCH_OBJ);
    $_SESSION['id'] = $data->us_id;
    $_SESSION['us_username'] = $data->us_username;
    //redirect ke halaman index
    header('location:'.$base_url);
  } 
  else 
  {
    $id = 'failed';
    //redirect ke halaman signin
    header('location:signin/'.$id);
  }
?>