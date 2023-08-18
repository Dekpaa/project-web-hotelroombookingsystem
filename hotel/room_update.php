<?php
//CONNECT TO DATABASE
require('config.php');
//RECALL HEADER FILE
require('header.php');
//RECEIVED POST VALUE
if(isset($_POST['update']))
{
	$roomname = $_POST['roomname'];
	$idtype=$_POST['idtype'];
	$idroom=$_POST['idroom'];
//SAVE WITH NEW VALUE
$result = mysqli_query($samb,
"UPDATE room SET nomroom='$roomname', idcat='$idtype'
WHERE idroom=$idroom");
echo "<script>alert('RECORD UPDATED');
window.location='room.php'</script>";
}
?>
<?php
$idroom = $_GET['idroom'];
$result = mysqli_query($samb,"SELECT * FROM room
WHERE idroom=$idroom");
while($res = mysqli_fetch_array($result))
{
    $room = $res['nomroom'];
	$cat = $res['idcat'];
}
$dataCat=mysqli_query($samb,"SELECT * FROM categories
WHERE idcat='$cat'");
$infoCat=mysqli_fetch_array($dataCat);
?><html><center>
<body><style>
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
    <h2>UPDATE ROOM & CATEGORY</h2>
	<form name="form1" action="room_update.php" method="POST">
<table width="600" border="0" align="center">
  <tr>
    <td width="200"><b>Room Number</b></td>
	<td><b>
	<input size="15"type="text" name="roomname" id="roomname"
	value="<?php echo $room;?>" /></td>
  </tr>
  <tr>
    <td width="200"><b>Room Category</b></td>
	<td><b>
	<select name="idtype">
	<option selected value="<?php echo $res['idcat']; ?>">
	<?php echo $infoCat['category']; ?></option>
	<?php $data2=mysqli_query($samb,"SELECT * FROM categories
	WHERE idcat <> '$res[idcat]'");
	while ($info2=mysqli_fetch_array($data2))
	{
	echo "<option value='$info2[idcat]'>$info2[category]</option>";
	}
	?>
        </select>
        </b>
	</td>
	<td><font size="2" color="#ff0000"><a href="category.php">
	 <button>Update Category</button></a></font></td>
  </tr>
</table>
<input type="hidden" name="idroom" value=<?php echo $_GET['idroom'];?>>
<input type="submit" name="update" id="submit" value="UPDATE" />
    </form>
<button>	<a href="room.php">ROOM LIST</a><br></button>
    </body>
	    </center>