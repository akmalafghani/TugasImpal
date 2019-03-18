<?php

$host = "localhost";
$user = "root";
$pass = "";
$database = "tugasimpal";

$connect = mysqli_connect($host,$user,$pass,$database)
	or die("Koneksi MySQL Gagal ".mysqli_error());

?>