<html>
<head>
  <title>SISTEM KALKULATOR</title>
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
* {
  box-sizing: border-box;
}
.container {
  padding: 16px;
  background-color: white;
}
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
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
  width: 100%;
  opacity: 0.9;
}
h1{
  color: white;
}
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
  <li><a class=”active” href=”papar.php”>Utama</a></li>
  <li><a href=”kira.php”>Kalkulator</a></li>
  <li><a href=”logout.php”>Log Keluar</a></li>
</ul>

<div style=”margin-left:25%;padding:1px 16px;height:1000px;”>
  <center>
  <h1>SELAMAT DATANG KE SISTEM KALKULATOR</h1>
  <img src=”banner.gif” width=”950” height=”350”  align=”bottom”>
</center>


<table border=”1” cellpadding=”6” cellspacing=”0” bgcolor=”yellow”><tr>


  <th>Bil.</th>

  <th>Nombor Pertama</th>

  <th>Operasi</th>

  <th>Nombor Kedua</th>

  <th>Hasil</th>


  <?php include ‘config.php’;

$display = mysqli_query($conn, ‘SELECT * FROM hasil’);
$bil = 1;

while ($result=mysqli_fetch_array($display)) {

  echo “<tr><td align=’center’> “.$bil++.”</td>

  <td align=’center’>”.$result[‘pertama’].”</td>

  <td align=’center’>”.$result[‘operasi’].”</td>
  
  <td align=’center’>”.$result[‘kedua’].”</td>

  <td align=’center’>”.$result[‘hasil’].”</td>”;}
  ?>

<center>

        <label>Choose Your Background Colour :</label>
        <button type=”button” onclick=”changeBodyBg(‘blue’);”>Blue</button>
        <button type=”button” onclick=”changeBodyBg(‘salmon’);”>Salmon</button>
        <button type=”button” onclick=”changeBodyBg(‘red’);”>Red</button>
         <button type=”button” onclick=”changeBodyBg(‘green’);”>Green</button>
        <button type=”button” onclick=”changeBodyBg(‘grey’);”>Grey</button>
    
<script type=”text/javascript”><?php echo $bgimage_session.”();”; ?></script>
</center>




</body></html>
