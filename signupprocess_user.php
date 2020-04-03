<?php
include('config.php');
$username=$_POST['username'];
$password=$_POST['password'];
echo"<br>";

$query="INSERT INTO daftar(username,password) VALUES('$username','$password')";
if(mysqli_query($conn,$query)){
	echo "Pendaftan Kali Pertama Anda Berjaya.Sila Login Semula. ";
	echo "<a href=\"login.php\">Daftar Masuk</a>";}
else
	{echo "Pendaftan Tidak Berjaya.Sila Cuba Lagi. <a href='sign_up.php'>Cuba Lagi</a>";}
?>
