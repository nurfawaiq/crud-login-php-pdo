<?php 
// koneksi dengan PDO extension

$host = 'localhost';
$db = 'crud3';
$user = 'root';
$pass = '12';
 
try {
    // http://php.net/manual/en/pdo.connections.php
    $con = new PDO("mysql:host={$host};dbname={$db}", $user, $pass);
    
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Setting Error Mode as Exception
    // More on setAttribute: http://php.net/manual/en/pdo.setattribute.php
} catch(PDOException $e) {
    echo $e->getMessage();
}

/*
Code by YukCoding Tutor
www.yukcoding.id
*/
?>
