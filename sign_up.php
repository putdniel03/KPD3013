<!DOCTYPE html>
<html>
<head>
  <title>SISTEM KALKULATOR</title>
  <style type="text/css">
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
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}
button:hover {
  opacity:1;
}
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}
.container {
  padding: 16px;
}
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
h1{
  color: white;
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
<body bgcolor="grey">

<center>
 	<h1>SELAMAT DATANG KE SISTEM KALKULATOR</h1>
 	<img src="banner.gif" width="950" height="350"  align="bottom">
</center>

<form id="form" name="form" method="post" action="signupprocess_user.php">
  <div class="container">
    <h2>Daftar Akaun</h2>
    <p>Isi borang ini untuk cipta akaun baharu.</p>
    <hr>

    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
    <hr>

    <div class="clearfix">
    	<button type="submit" class="signupbtn">Submit</button>
    	<button type="reset" class="cancelbtn">Reset</button>
    </div>
  </div>

  
  <div class="container signin">
    <p>Already have an account? <a href="login.php">Login</a>.</p>
  </div>
</form>
</body>
</html>
