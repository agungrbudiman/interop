<?php
//lanjutkan session yang sudah dibuat sebelumnya
session_start();

//hapus session yang sudah dibuat
unset($_SESSION['us_username']);
unset($_SESSION['id']);

//redirect ke halaman signin
$id = 'success';
header('location:signin/'.$id);
?>
