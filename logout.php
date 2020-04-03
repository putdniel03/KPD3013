<!DOCTYPE html>
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


input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
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
.registerbtn:hover {
  opacity: 1;
}
h1,h4,h5{
  color: white;
}

</style>
</head>
<body>

<ul>
  <li><a href="login.php">Utama</a></li>
  <li><a href="kira.php">Kalkulator</a></li>
  <li><a a class="active" href="logout.php">Log Keluar</a></li>
</ul>

<div style="margin-left:25%;padding:1px 16px;height:1000px;">
  <center>
  <h1>SELAMAT TINGGAL! </h1>
</center>
<center>
  <img src="wave.gif"><br>
<h4>YOU'RE LOGGED OUT!</h4><br>
<h5>Wanna Log In Back?</h5><br>
<img src="point.gif"><br>
<a href="login.php"><button type="submit" class="registerbtn">Login</button></a>
</center>
</body>
</html>
<center>
<?php
session_start();
session_destroy();
?>
</center>