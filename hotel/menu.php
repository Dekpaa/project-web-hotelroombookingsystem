<html
<?php
if ($_SESSION['levels']=="ADMIN")
{
?>
<style><center>MAIN MENU [admin]</center>
<body><style>
button {
  background-color: #FF7F50;
  border: none;
  color: white;
  padding: 14px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</body>
</style>
<BR>
<button><a href="room.php">Room Setup</a></button>
<button><a href="staff.php">Staff</a></button>
<button><a href="import_staff.php">Staff Import</a></button>
<button><a href="booking.php">Room Booking</a></button>
<button><a href="booking_list.php">Booking List</a></button>
<button><a href="report.php">Report</a></button>
<button><a href="signout.php">Sign Out</a></button>
<?php
}
else
{
?>
MAIN MENU [staff]
<BR>
<li><a href="booking.php">Room Booking</a></li>
<li><a href="booking_list.php">Booking List</a></li>
<li><a href="signout.php">Sign Out</a></li>
    <body>
    <h2>Our Hotel</h2>
<img src="1.jpg" alt="1" width="500" height="333"></body>
<?php
}
?>