<?php
//lanjutkan session yang sudah dibuat sebelumnya
session_start();

//hapus session yang sudah dibuat
session_destroy();

//redirect ke halaman signin
$id = 'success';
header('location:signin/'.$id);
?>
