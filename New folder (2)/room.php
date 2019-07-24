<html>
<head>
<title>form</title>
<link rel="stylesheet" type="text/css" href="room.css">
</head>
<body>




<h1>ROOM INFORMATION</h1>
<form name="room_info_form" action="abc.php" method="post" id="room">
<div class="form">

<fieldset id="fs">
	<label>Type:</label>
	<select name="room_type" value="room_type">
<option name="simple" value="simple">Simple</option>
<option name="delux" value="delux">Delux</option>
</select><br><br>
 
 <label>Bed No.</label>
 <input type="number" name="bed_no"><br><br>
<label>Price:</label>
 <input type="number" name="price"><br><br>

</fieldset>
<input type="submit"  name="submit" value="Register" id="sub"><br><br>
</form>
</div>
</html>