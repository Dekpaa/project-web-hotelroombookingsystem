<?php
//CONNECT TO DATABASE
require('config.php');
//RECALL HEADER
require('header.php');
//RECEIVED IC NUMBER SEARCH
$guest2= $_POST['icguest'];
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
  cursor: pointer;}
</style><center>
<h2>GUEST INFORMATION</h2>
<table width="800" border="1" align="center">
  <tr>
  <td width="20"><b>Num.</b></td>
	<td width="200"><b>Name</b></td>
	<td width="50"><b>HP Number</b></td>
	<td width="100"><b>Action</b></td>
  </tr>
<?php
//QUERY TO SEARCH IC NUMBER
$found = "SELECT * FROM guest WHERE icguest like '%$guest2%'";
//EXE query $found
$result = mysqli_query($samb,$found);
$no=1;//INITIAL VALUE STARTING
while ($data = mysqli_fetch_array($result)) {
?><tr>
  <td><?php echo $no; ?></td>
	<td><?php echo $data['name']; ?></td>
	<td><?php echo $data['hpnum']; ?></td>
	<td><a href="booking_form.php?idguest=
	<?php echo $data['icguest'];?>"><button>BOOKING</button></a>
</tr>
<?php
  $no++;//increment
 }
?></table></center><a href="index2.php"Ke Menu Utama</a><br></center>
<?php require('footer.php'); ?></html>