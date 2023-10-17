<?php 
$konek=mysqli_connect('localhost','root','','sekolah');

$username = $_POST['username'];
$password = $_POST['password'];
 
$login = mysqli_query($konek,"select * from admin where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);
 
if($cek > 0){
	session_start();
	$_SESSION['username'] = $username;
	?>

<script language="JavaScript">alert('Selamat Datang');
document.location=('home.php');</script>
<?php

}else{
	header('location:cek.php');
} 
?>
