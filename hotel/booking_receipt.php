<?php
//sambung ke pangkalan data
include "config.php";
include "header.php";
//GET THE ID FROM URL
$Nreceipt=$_GET['id'];
//GET THE RELATED RECORD
$Booking=mysqli_query($samb,"SELECT * from booking where idbook='$Nreceipt'");
$getBooking=mysqli_fetch_array($Booking);
$Room=mysqli_query($samb,"SELECT * from room where idroom='$getBooking[idroom]'");
$getRoom=mysqli_fetch_array($Room);
$Cat=mysqli_query($samb,"SELECT * from categories where idcat='$getRoom[idcat]'");
$getCat=mysqli_fetch_array($Cat);
$Guest=mysqli_query($samb,"SELECT * from guest where icguest='$getBooking[icguest]'");
$getGuest=mysqli_fetch_array($Guest);
$Address=mysqli_query($samb,"SELECT * from address where icguest='$getGuest[icguest]'");
$getAdd=mysqli_fetch_array($Address);	
//REARRANGE DATE FORMAT	
	$In = date("d-m-Y", strtotime($getBooking['check_in']));
	$Out = date("d-m-Y", strtotime($getBooking['check_out']));
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
<center>
<title>OFFICIAL RECEIPT <?php echo $hotelname;?></TITLE>
<table width="800" border="0">
 <tr>
    <td width="700"><table width="700" border="0">
  <tr>
      <td width="360" valign="top">
        <span class="style1">
		<center>
		<u><h2>OFFICIAL RECEIPT</h2></u></center><br/>
		<?php echo $hotelname;?><br/>
		<?php echo $address;?><br/>
        </span><br /> </td>
        <td width="23">&nbsp;</td>
        <td width="308" valign="top"><div align="right"><br />
      Receipt Date: <?php echo date("d/m/Y"); ?><br>
		  Receipt Num: <?php echo $getBooking['idbook']; ?>
        </span></div></td>
      </tr><tr>
   <td colspan="3" valign="top"><hr /></td>
</tr>
</table>
</td>
</tr>
<tr>
    <td><p><strong>DETAIL GUEST & BOOKING ROOM</strong></p>		
			<table width="700" border="1" align="center">
	</td>
</tr>
<tr>
    <td width="300">ROOM BOOKING<br>
	Room Number:<br>Category:</td>
	<td width="400"><?php echo $getRoom['nomroom']; ?><br>
					<?php echo $getCat['category']; ?> 
					( RM<?php echo $getCat['price']; ?> )
	</td>	
</tr>
<tr>
    <td width="300">DATE CHECK IN / OUT<br>
	Check In:<br>Check Out:</td>
	<td width="400"><?php echo $In; ?><br>
					<?php echo $Out; ?>
	</td>	
  </tr>  
  <tr>
    <td width="300">GUEST NAME</td>
	<td width="400"><?php echo $getGuest['name'];?></td>	
  </tr>
  <tr>
    <td width="300">GUEST IC NUMBER</td>
	<td width="400"><?php echo $getGuest['icguest'];?></td>	
  </tr>
  <tr>
    <td width="300">ADDRESS</td>
	<td width="400"><?php echo $getAdd['address1'];?><br>
					<?php echo $getAdd['address2'];?><br>
					<?php echo $getAdd['postcode'];?>
					<?php echo $getAdd['town'];?><br>
					<?php echo $getAdd['states'];?><br>
	</td> 
  </tr>
  <tr>
    <td width="300">TOTAL PAYMENT:</td>
	<td width="400">RM <?php echo $getBooking['payment'];?><br></td>
  </tr>  
<p>	  
</table>
<hr /><div align="center" class="style15"></div>
        <center>  <br>
<small>THIS IS A COMPUTER PRINT, NOT REQUIRED SIGNATURE.</small><br><br>             
<a href="javascript:window.print()"><button>Print Report</button></a>|
<a href="index2.php"><button>MAIN MENU</button></a></center>			
</body>
</html>