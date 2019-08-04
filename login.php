<!DOCTYPE html>
<html>
<head>
	<title>login</title>
</head>
<body>
<?php

if(isset($_POST['login'])){
	echo '<p>button clicked</p>' ;
}
session_start();
  $_SESSION["loggedin"] = true;

              $_SESSION["id"] = '1';
              $_SESSION["user"] = 'sunil99';

                            // Redirect user to welcome page
              header("location: homestay/admin/home.php");
?>

</body>
</html>