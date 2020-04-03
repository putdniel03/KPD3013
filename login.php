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
  <li><a href="papar.php">Utama</a></li>
  <li><a href="kira.php">Kalkulator</a></li>
  <li><a href="logout.php">Log Keluar</a></li>
</ul>

<div style="margin-left:25%;padding:1px 16px;height:1000px;">
 	<center>
 	<h1>SELAMAT DATANG KE SISTEM KALKULATOR</h1>
 	<img src="banner.gif" width="950" height="350"  align="bottom">
</center>


<form action="loginprocess_login.php" method="post">
  <div class="container">
    <h2>Daftar Masuk Pengguna</h2>
    <p>Isi borang ini untuk masuk ke dalam akaun  .</p>
    <hr>

    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="passw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
    <hr>

    <button type="submit" class="registerbtn">Login</button>
  </div>
  
  <div class="container signin">
    <p>Dont have an account? <a href="sign_up.php">Sign Up</a>.</p>
  </div>
</form>
</div>

</body>
</html>