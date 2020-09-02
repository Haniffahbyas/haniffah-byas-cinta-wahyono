<?php  
	$hostname = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'admin';
	$kondisi = mysqli_connect($hostname, $username, $password, $dbname) or die ('Gagal Terhubung ke database'); 
?>