<?php
//CONNECT  TO  DATABASE
require('config.php');
//RECALL HEADER FILE
require('header.php');
//GET VALUE POST
if(isset($_POST['cat'])){
//ADD NEW VALUE INTO ROW
    mysqli_query($samb,"INSERT INTO categories(idcat,category,price)
	values(NULL,'$_POST[cat]','$_POST[rm]')");
	//DISPLAY MSG
	echo "<script>alert('New Category & Price Added');
	    window.location='category.php'</script>";
}
?>

<html>
<center>
<body>
    <h2>ADD NEW CATEGORY & PRICE</h2>
	<form name="form1" action="category_add.php" method="POST">
<table width="700" border="1" align="center">
  <tr>
    <td width="200">CATEGORY NAME</td>
	<td width="400"><input type="text" name="cat"
	    placeholder="Adult" required AUTOFOCUS /></td>
	</tr>
	<tr>
	  <td width="200">PRICE</td>
	  <td width="400"><input type="money" name="rm"
	       placeholder="30.00" size="5" require /></td>
	</tr>
<p>
</table>
    <br><br><input type="submit" name="add" value="ADD CATEGORY" />
	<fieldset>
	</form>
	<a href="category.php">CATEGORY LIST</a><br>
	    </body></center>
</html>