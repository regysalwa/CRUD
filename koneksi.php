<?php

$host = 'localhost';
$nama = 'root';
$pass = '';
$db = 'db_crud_project';

$koneksi = mysqli_connect($host, $nama, $pass, $db);
if (!$koneksi){
	die("koneksi gagal: ".mysql_connect_error());
} 
?>