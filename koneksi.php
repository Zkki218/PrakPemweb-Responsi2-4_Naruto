<?php
error_reporting(E_ALL ^ E_NOTICE AND E_DEPRECATED);
$host = 'link hosting';
$user = 'username hosting';
$pass = 'password hosting';
$db   = 'naruto';

$koneksi = mysqli_connect($host,$user,$pass,$db) or die("Koneksi gagal!");
?>