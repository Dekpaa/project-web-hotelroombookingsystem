<?php
//CONNECT TO DATABSE
require('config.php');
//RECALL HEADER FILE
require('header.php');
?>
<html><style>
button {
  background-color: #FF6A20;
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
<body>
<center>
<h2>LIST OF ROOM</h2>
<table width="811" border="1" align="center">  
  <tr>
    <td width="40"><b>Num.</b></td>
    <td width="150"><b>Room Number</b></td>
    <td width="200"><b>Type Room</b></td>
    <td width="150"><b>Price Room</b></td>
	<td width="200"><b>Action</b></td>
  </tr>
 <?php
  $data1=mysqli_query($samb,"SELECT * FROM room ORDER BY nomroom ASC");		
      $no=1;          
	while ($info1=mysqli_fetch_array($data1))
		{
	$dataCat=mysqli_query($samb,"SELECT * FROM categories WHERE idcat='$info1[idcat]'");
	$infoCat=mysqli_fetch_array($dataCat);		
		?>
  <tr>
    <td><?php echo $no; ?></td>
    <td><?php echo $info1['nomroom']; ?></td>
    <td><?php echo $infoCat['category']; ?></td>
    <td>RM <?php echo $infoCat['price']; ?></td>
    <td><a href="room_update.php?idroom=
	<?php echo $info1['idroom'];?>"><button>UPDATE</button></a> |
		<a href="room_delete.php?idroom=
		<?php echo $info1['idroom'];?>"><button>DELETE</button></a>
	</td>
  </tr>
  <?php $no++; } ?>
    <tr>
    <td colspan="5" valign="middle" align="right"><b>
	<a href="room_add.php"><button>[+] Add Room</button></a></b></td>    
  </tr> 
</table>
<button><a href="index2.php">MAIN MENU</a><br></button>   
        </center>
    </body>
</html>