<?php
include('config.php');
$username=$_POST['username'];
$password=$_POST['password'];
echo"<br>";

$iquery="INSERT INTO user(username,password) VALUES('$username','$password')";
if(mysqli_query($conn,$iquery)){
	echo "<a href=\"kira.php\"> Ayuh Ke Kalkulator Online</a>";
	}
else
	{echo "Pendaftan Tidak Berjaya.Sila Cuba Lagi. <a href='login.php'>Cuba Lagi</a>";}
?>
