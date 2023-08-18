<?php
//CONNECT TO DATABASE
require('config.php');
//RECALL HEADER
require('header.php');
//GET THE ID FROM URL
$IdStaff = $_GET['staffid'];
//DISPLAY OLD RECORD
$result = mysqli_query($samb, "SELECT * FROM staff
WHERE idstaff='$IdStaff'");
while($res = mysqli_fetch_array($result))
{
	$name=$res['name'];
	$pass=$res['pass'];
}
//RECIVE A POST VALUE
if(isset($_POST['update']))
{
	$name=$_POST['staffname'];
	$pass=$_POST['pass'];
	//SAVE WITH NEW VALUE
	$result = mysqli_query($samb,
	"UPDATE staff SET name='$name', pass='$pass',levels=levels
	WHERE idstaff='$IdStaff'");
//DISPLAY MSG
echo "<script>alert('RECORD SUCCESSFULLY UPDATED ');
window.location='staff.php'</script>";
    }
?>
<html>
<style>
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
}</style>
<center>
<body>
<h2>UPDATE STAFF RECORD</h2>
<form method="post" enctype="multipart/form-data">
<table width="700" border="1" align="center">
  <tr>
    <td width="200">STAFF NAME:</td>
	<td width="400"><input type="text" name="staffname"
	id="staffname" size="50"
	value="<?php echo $name;?>" AUTOFOCUS /></td>
  </tr>
<tr>
    <td width="200">PASSWORD:</td>
	<td width="400"><input type="text" name="pass" id="pass"
	value="<?php echo $pass; ?>"/></td>
  </tr>
</table>
<p>
<input type="submit" name="update" id="submit" value="UPDATE NOW" />
</form>
<a href="staff.php"><button>STAFF LIST</button></a><br>
</center>
</body><br/>
<?php require('footer.php'); ?>
</html>