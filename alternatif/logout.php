<?php 
	include "koneksi.php";
    session_start();

	if (isset($_SESSION['login']) == '') {
		echo "<script>window.location='login.php';</script>";
	} 

	session_unset();
	session_destroy();
	$_SESSION = [];

	echo "<script>window.location='login.php';</script>";
?>