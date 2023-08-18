<?php
//CONNECT TO DATABASE
require('config.php');
//RECALL HEADER FILE
require('header.php');
?>
<html>
<style>
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
<center>
<h2>STAFF LIST</h2>
<table width="800" border="1" align="center">
  <tr>
    <td width="40"><b>Num.</b></td>
	<td width="300"><b>Staff Name</b></td>
	<td width="100"><b>User Name</b></td>
	<td width="50"><b>Password</b></td>
	<td width="150"><b>Action</b></td>
  </tr>
  <?php
   $data1=mysqli_query($samb,"SELECT * FROM staff");
       $no=1;
	while ($info1=mysqli_fetch_array($data1))
	{
	?>
  <tr>
    <td><?php echo $no; ?></td>
	<td><?php echo $info1['name']; ?></td>
	<td><?php echo $info1['idstaff']; ?></td>
	<td><?php echo $info1['pass']; ?></td>
	<td><a href="staff_update.php?staffid=
	<?php echo $info1['idstaff'];?>"><button>UPDATE</button></a> 
	<?php 
	//HIDDEN DELETE LINK FOR ADMIN
	if ($info1['levels']!="ADMIN")
	{
	?>
	<?php
}
	?>
	</td>
  </tr>
	<?php $no++; }?>
</table>
<a href="index2.php"><button>MAIN MENU</button></a><br></center>
</html>