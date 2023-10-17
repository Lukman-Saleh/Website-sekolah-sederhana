<?php
$hostname="localhost";
$username="root";
$password="";
$database="sekolah";
$koneksi= mysqli_connect($hostname,$username,$password,$database) or die ("koneksi ke MySQL gagal");
if (!$koneksi)  {
    die("Conection failed: ".mysqli_connect_error());
}
?>