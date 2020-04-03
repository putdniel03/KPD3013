<?php if(isset($_POST['nombor'])){ 
$nopertama = $_POST['pertama'];
$nokedua = $_POST['kedua'];
$operasi = $_POST['operasi'];
 switch ($operasi) {
     case 'tambah':
     $hasil = $nopertama + $nokedua;
   break;
   case 'tolak':
    $hasil = $nopertama - $nokedua;
   break;
   case 'darab':
    $hasil = $nopertama * $nokedua;
    break;
   case 'bahagi':
    $hasil = $nopertama / $nokedua;
   }
}
 ?>
<!DOCTYPE html>
<html>
<head>
  <title>KALKULATOR</title>
<style>
body {
  margin: 0;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 25%;
  background-color: white;
  position: fixed;
  height: 100%;
  overflow: auto;
}
li a {
  display: block;
  color: #000;
  padding: 8px 16px;
  text-decoration: none;
}
li a.active {
  background-color: #c5aa6a;
  color: white;
}
li a:hover:not(.active) {
  background-color: #555;
  color: white;
}

body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: grey;
}
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
input[type=text], input[type=password] {
  width: 12%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  text-align: center;
  background: #f1f1f1;
}
input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 10%;
  opacity: 0.9;
}

h1{
  color: white;
}
h4{
  color: white;}
.registerbtn:hover {
  opacity: 1;
}
a {
  color: dodgerblue;
}
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>

<ul>
  <li><a href="login.php">Utama</a></li>
  <li><a class="active" href="kira.php">Kalkulator</a></li>
  <li><a href="logout.php">Log Keluar</a></li>
</ul>

<div style="margin-left:25%;padding:1px 16px;height:1000px;">
  <center>
  <h1>SELAMAT DATANG KE SISTEM KALKULATOR</h1>
  <img src="banner.gif" width="950" height="350"  align="bottom">
</center>

  <center>
 <div class="kalkulator">
  <h1>KALKULATOR</h1>
  <center>
    <img src="lost.gif">
    <h4>Perlukan Bantuan Dalam Menyelesaikan Masalah Matematik?</h4>
  </center>
      <form action="" action="" method="post">
   <input class="number" type="text" name="pertama" placeholder="Bilangan Pertama">

   <select class="option" name="operasi">
<option value="tambah">+</option>
<option value="tolak">-</option>
<option value="darab">x</option>
<option value="bahagi">/</option>
   </select>
   
   <input class="number" type="text" name="kedua" placeholder="Bilangan Kedua">
   <br>
      <input type="submit" name="nombor" class="tombol" value="Hitung">
<br>
</form>
  <?php if(isset($_POST['nombor'])){ ?>
  <input type="text" value="<?php echo $hasil; ?>" class="number" name="hasil">
  <?php }else{ ?>
   <input type="text" value="0" class="number">
  <?php } ?><br>
   <button type="submit" name="save" class="registerbtn">Simpan</button></form>
</div></center>
 </body>
 </html>
