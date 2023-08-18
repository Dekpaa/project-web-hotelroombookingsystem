<?php
//CONNECT TO DATABASE
require('config.php');
//RECALL HEADER FILE
require('header.php');
?>
<html><style>
button {
  background-color: #02A596;
  border: none;
  color: white;
  padding: 10px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
<body><center>
<form name="searchForm" method="post" action="booking_start.php">
<table width="800" border="0" align="center" cellpadding="0">
<tr><td colspan="2" align="center">
  <h2>GUEST INFORMATION<h2></td></tr>
<tr>
    <td align="right" >SEARCH IC NUMBER:</td>
	<td> <input type="text" name="icguest" autofocus> </td>
</tr>
<tr>
  <td colspan="2" align="center"> <input type="submit"
      name="SUBMIT" id="SUBMIT" value="SEARCH NOW" > </td>
</tr>
<tr>
  <td colspan="2" align="center">OR</td>
</tr>
<tr><td align="right" >REGISTER NEW GUEST</td><td><a href="guest_register.php">Register here!</a></td>
</tr>
    </td>
</table>
</form></center>
</body>
<center><a href="index2.php"><button>MAIN MENU</button></a></center
<?php require('footer.php'); ?>
</html>