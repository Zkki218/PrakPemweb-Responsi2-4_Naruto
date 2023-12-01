<?php
error_reporting(E_ALL ^ E_NOTICE AND E_DEPRECATED);
$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'naruto';

$koneksi = mysqli_connect($host,$user,$pass,$db) or die("Koneksi gagal!");
?>
