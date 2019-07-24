<html>
<head>
<title>form</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="room.css">

</head>
<body>


<h1>USER'S INFORMATION</h1>

<form name="user_info_form" action="abc.php" method="post" id="user">

<fieldset id="fs">
	
 <label>Name</label>
 <input type="text"  name="name"><br><br>
 <label>Username</label>
 <input type="text" name="username"><br><br>
 <label>Password</label>
 <input type="password" name="password"><br><br>

<label>Email:</label>
 <input type="text" name="email"><br><br>

</fieldset>

<input type="submit"  name="submit" value="Register" id="sub"><br><br>
</form>





<h1>HOMESTAY OWNER's INFORMATION</h1>

<form name="ownerinfo_form" action="abc.php" method="post" id="owner">

<fieldset id="fs">
	<label>Homestay Owner Name:</label>
<input type="text" name="owner_name"><br><br>
<label>Username:</label>
<input type="text" name="username"><br><br>
<label>Password:</label>
<input type="password" name="password"><br><br>
<label>Profile Picture:</label>
<input type="image" name="profile_pic"><br><br>

<label>Phone Number</label>
<input type="text" name="ph_no"><br><br>

<label>About Host :</label>
<input type="text" name="about_host"><br><br>

</fieldset>

<input type="submit"  name="submit" value="Register" id="sub"><br><br>
</form>
</div>




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




	<h1>HOMESTAY INFORMATION</h1>





<form name="homestayinfo-form" action="abc.php" method="post" id="register">
	<div class="register">

	<legend id="legend">Register Form</legend>
<fieldset id="fs">
	<label>Homestay Name:</label>
<input type="text" name="hname" id:"hName"><br><br>
<label>Tag line:</label>
<input type="text" name="tagline"><br><br>
<label>Content:</label>
<input type="text" name="content"><br><br>
<label>Location Catagory:</label>
	<select name="LocationCatagories:" value="LocationCatagory">
	<option value="Pokhara">Pokhara </option>
	<option value="Kathmandu">Kathmandu</option>
	<option value="Mustang">Mustang </option>
	</select><br><br>
	
<label>Location:</label>
<input type="text" name="location"><br><br>

<label>Meals:</label>
<input type="text" name="meals"><br><br>


<label class="features">Features:</label> 
<input type="checkbox" name="features[]" value="internet"><label>Internet</label>
<input type="checkbox" name="features[]" value="laundry"><label>Laundry</label>
<input type="checkbox" name="features[]" value="parking"><label>Parking</label><br><br>



	<label>Rules:</label>
<input type="text" name="rules"><br><br>
<label>Programs:</label>
<input type="text" name="programs"><br><br>



<form method="post" enctype="multipart/form-data">
	<input type="file" name="image" id="image"><br>
<input type="submit" name="insert" id="insert" value="insert"> <br><br>
</form>


</fieldset>

<input type="submit"  name="submit" value="Register" id="sub"><br><br>
</form>
</div>
</html>