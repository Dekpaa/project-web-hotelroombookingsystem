<?php
//CONNECT TO DATABASE
require('config.php');
//RECALL HEADER FILE
require('header.php');
//START LOGIN SESSION
session_start();
//GET THE POST VALUES
if(isset($_POST['idstaff'])) {
   //PASS POST VALUE TO VARIABLE
   $user = $_POST['idstaff'];
   $pass = $_POST['pass'];
   //EXE. THE SQL STATEMENT
   $query = mysqli_query($samb, "SELECT * FROM staff
    WHERE idstaff='$user' AND pass='$pass'");
	$row = mysqli_fetch_assoc($query);
if(mysqli_num_rows($query) == 0||$row['pass']!=$pass)
{
   //MSG IF FAIL TO LOGIN
   echo"<script>alert('Sales Person ID OR Password incorrect');
   window.location='index.php'</script>";
}
   else
   {
   $_SESSION['idstaff']=$row['idstaff'];
   $_SESSION['levels'] = $row['levels'];
   //CREATE VARIABLE FOR LOGIN SESSION
   $saleMan=$_SESSION['idstaff'];
   
   //OPEN THE MAIN MENU
   header("Location: index2.php");
   }
}
?>
<html>
<body>
    <head>
<title>HOME</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC">
<style>
body, html {height: 100%}
body,h1,h2,h3,h4,h5,h6 {font-family: "Amatic SC", sans-serif} 
.menu {display: none}
<style>
body {
  background-image: url(hi.jpg);
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
button {
  background-color: #6a5acd;
  border: none;
  color: white;
  padding: 10px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
</head>
<body>
<center>
<table width='70%' border=0>
    <td>
<form method="POST">
<center><body><FONT SIZE="+3" COLOR="Gold" font face="Forte"><i>
    <p>STAFF LOGIN</p></i></FONT></body>
<label>ID STAFF :</label><br>
<input type="text" name="idstaff"
    placeholder="Ahmed" required><br>
<label>PASSWORD :</label><br>
<input type="password" name="pass"
    placeholder="123" required><br>
<button type="submit">Login</button><br>
    </center>
        </form>
</td>
<html>
 <head>
  <title>Default Width dan Height di Tag Marquee</title>
 </head>
 <body><FONT SIZE="+4" COLOR="Red" font face="Algerian"><i>
  <center><marquee>HAVE A NICE DAY!!!</marquee></center>
     </i>
     </FONT>
     
 </body>
</html>
<?php require('footer.php'); ?>
