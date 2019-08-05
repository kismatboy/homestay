<!DOCTYPE html>
<html>
<head>
	<title>login</title>
</head>
<body>
<?php
 session_start();
                   $_SESSION["loggedin"] = true;

            
              $_SESSION["user"] = 'sunil99';
                 $_SESSION['id'] =1;
                  header("location: homestay/admin/home.php");
                  ?>


</body>
</html>