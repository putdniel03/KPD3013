<?php
	include 'config.php';
	
$np= $_POST['pertama'];

$nk=$_POST['kedua'];

$op= $_POST['operasi'];

$ha= $_POST['hasil'];
	

	$sql="INSERT INTO hasil values('$np','$nk','$op','$ha')";
	
	if(mysqli_query($conn,$sql)){
			echo "<script>alert ('Data Anda Berjaya Disimpan')
			window.location='papar.php'</script>" ;
		}
		else {
			echo "Data Anda Tidak Berjaya Disimpan";
		}
	
?>