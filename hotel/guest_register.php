<?php
//RECALL HEADER FILE
require('header.php');
?>
<html>
<h2>REGISTER NEW GUEST</h2>
<body>
     <style>
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
<fieldset><legend>Guest Information</legend>
<form method="POST" action="guest_add.php">
   <label>IC Number</label><br>
   <font size="1" color="#ff0000">*Without -</font><br>
   <input type="text" name="icguest" placeholder="090807031234"
maxlength='12'size="15"
onkeypress='return event.charCode >= 48 && event.charCode <= 57' required
autofocus><br>
    <label>Guest Name</label><br>
	<font size="1" color="#ff0000">*Capital Letter</font><br>
	<input type="text" name="name" id="nama" placeholder="Robert Quick"
size="60" required ><br>
    <label>HP Number</label><br>
	<input type="text" name="nomhp" placeholder="0187654321"
maxlength='12'size="15"
    onkeypress='return event.charCode >= 48 && event.charCode <= 57' re-
quired autofocus><br>
	<label><u>Address:</u></label><br>
	<label>Address1</label><br>
	<input type="text" name="address1" id="address1" placeholder=
"Address1" size="60" required ><br>
    <label>Address2</label><br>
	<input type="text" name="address2" id="address2" placeholder=
"Address2" size="60"><br>
    <label>Town</label><br>
	<input type="text" name="town" id="town" placeholder="Town"
size="40" required ><br>
    <label>Postcode</label><br>
	<input type="text" name="postcode" placeholder="18000"
maxlength='5'size="7"
    onkeypress='return event.charCode >=48 && event.charCode <= 57'
required autofocus><br>
    <label>State</label><br>
	<input type="text" name="state" id="state" placeholder="Kelantan"
size="30" required ><br><br>
<button type="submit">REGISTER NOW</button>
<button type="reset">RESET</button><br><br>
*Make sure all information is typed carefully.</form>
<form action="index2.php"><button type="submit">MAIN MENU</
button><br><br>
</fieldset></body>
<?php require('footer.php'); ?>
</html>