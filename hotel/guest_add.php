<?php
//sambung ke pangkalan data
require('config.php');
//semak sama ada data dengan IC Pelanggan telah dihantar
if(isset($_POST['icguest'])) {
	//pembolehubah untuk memegang data yang dihantar
	$ic = $_POST['icguest'];
	$name = $_POST['name'];
	$hp = $_POST['nomhp'];
	$add1= $_POST['address1'];
	$add2 = $_POST['address2'];
	$pcode = $_POST['postcode'];
	$town = $_POST['town'];
	$state = $_POST['state'];
$sql = "INSERT INTO guest (icguest,name,hpnum)
VALUES ('$ic','$name','$hp')";

$laksana=mysqli_query($samb,$sql);

$sql1 = "INSERT INTO address
(idaddress,address1,address2,town,postcode,states,icguest)
VALUES (NULL,'$add1','$add2','$pcode','$town','$state','$ic')";

$laksana=mysqli_query($samb,$sql1);
    // SHOW MSG
	if ($laksana) {
		echo "<script>alert('RECORD SUCCESSFULLY SAVE');
		window.location='index2.php'</script>";
	}else{
		echo "<script>alert(RECORD FAILED SAVE');
		window.location='guest_register.php'</script>";
	}
}
?>
