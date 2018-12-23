<?php
session_start();
session_destroy();
echo "<script>alert('Anda berhasil logout'); window.location='login.php';</script>";

/*
Code by YukCoding Tutor
www.yukcoding.id
*/
?>