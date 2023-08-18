<?php
//sambungan MYSQLI dengan nama $samb
$samb = mysqli_connect("localhost","root","","hotel");
// semak sambungan jika gagal
if (mysqli_connect_errno()){
echo "Error: ".mysqli_connect_error();
}
//SETUP HOTEL NAME
$sysname=" RELAXIES ROOM BOOKING SYSTEM";
$hotelname=" RELAXIES HOTEL";
$address="NO 312, JALAN Mutiara LORONG 10, 83400 JOHOR DARUL TAKZIM,MALAYSIA";

?>