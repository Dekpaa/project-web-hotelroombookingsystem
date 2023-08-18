<?php
//CONNECT TO DATABASE
require('config.php');
//RECALL HEADER FILE
require('header.php');
//RECEIVE POST VALUE
if(isset($_POST['nomroom']))
{
	$nomroom=$_POST['nomroom'];
	$idcat=$_POST['idcat'];
	//ADD VALUE TO TABLE
	$result = mysqli_query($samb, "INSERT INTO room (nomroom,idcat)
	VALUES ('$nomroom', '$idcat')");
	
echo "<script>alert('RECORD ADDED');
    window.location='room.php'</script>";
}
?>
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
}
</style>
<html>
<center>
<body>
    <h2>ADD NEW ROOM</h2>
	<form name="form1" action="room_add.php" method="POST">
<table width="900" border="0" align="center">
  <tr>
    <td width="100">ROOM NUMBER</td>
	<td width="300"><input size="20" type="text"
	name="nomroom" id="nomroom" required /></td>
</tr>
<tr>
  <td width="100">TYPE ROOM</td>
	<td width="300">
	<select name="idcat">
	<?php
	$dataCat=mysqli_query($samb,"select * from categories");
	while ($infoCat=mysqli_fetch_array($dataCat))
	{
	echo "<option hidden selected> -- Choose Type Room -- </option>";
	echo "<option value='$infoCat[idcat]'>$infoCat[category]</option>";
	}
	?>
	</select>
	</td>
</tr>
  <tr>
  <td colspan="2" align="center">
  <input type="submit" name="add" id="add" value="ADD ROOM" />
  </td>
  </tr>
</table>
    </form>
	<a href="room.php"><button>LIST OF ROOM</button></a><br>
	    </body></center>	
</html>