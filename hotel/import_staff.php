<?php
//CONNECT TO DATABASE
require('config.php');
//RECALL DATABASE
require('header.php');
?>
<html>
<center>
    <style>
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
<h2>IMPORT STAFF RECORDS<br>
---CSV FILE IMPORT---</h2>
<body>
<form action="import_process.php" method="post"
name="upload_excel" enctype="multipart/form-data">
<table width="700" border="0" align="center">
  <tr>
    <td width="300">Choose CSV/Excel file:</td>
	<td width="400">
	<input type="file" name="file" id="file" class="input-large">
	</td>
  </tr>
  <tr>
    <td></td>
	<td width="400"><button type="submit" id="submit" name="Import">UPLOAD NOW</button></td>
    </table>
    </form>
    </body>
    </center>
    <center><button><a href="index2.php">MAIN MENU </a></button></center>
</html>