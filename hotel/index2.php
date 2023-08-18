<?php
session_start();
//TO AVOID BAYPASS
include ("security.php");
//CONNECT TO DATABASE
require('config.php');
//RECALL HEADER FILE
require('header.php');
?>
<html>
<body>
<center><table width='70%' border=0>
<tr>
    <td><?php include ("menu.php"); ?> </td>
</tr>
</table></center></body>
       <center><h2>OUR HOTEL</h2></center> 
<center><img src="1.jpg" alt="1" width="470" height="210"> <img src="4.jpg" alt="2" 
width="470" height="210"> <img src="2.jpg" alt="3" width="470" height="210"></center>
<?php require('footer.php'); ?>
</html>