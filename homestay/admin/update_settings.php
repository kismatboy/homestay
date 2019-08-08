
<?php
session_start();  
if(!isset($_SESSION["user"]))
{
	header("location:index.php");
	exit();
}
require 'db.php';

	// Define variables and initialize with empty values
$username = $con_pass = $new_pass =$old_pass ="";

if(isset($_POST['update_settings'])){

	$username=$_SESSION['user'];
	$con_pass=$_POST['pass_new_conform'];
	$new_pass=$_POST['pass_new'];
	$old_pass=$_POST['pass_old'];



	if ($new_pass == $con_pass){

		$sql ="SELECT * from user where username ='$username';";

		if ($result=mysqli_query($con,$sql)) {
 	//count number of rows in query result
			$rowcount=mysqli_num_rows($result);
       	//if no rows returned show no news alert
			if ($rowcount==0) {
       		# code...
				echo 'no username match';
			}
			else{
				foreach ($result as $pw) {
      	# code...
					$hashed_password=$pw['password'];
					if(password_verify($old_pass, $hashed_password)){

						$hash = password_hash($new_pass, PASSWORD_DEFAULT);


						$sql="UPDATE `user` SET `password`='$hash' where username ='$username';";
						if ($result=mysqli_query($con,$sql)) {
							echo '<script>alert("password changed")</script>';
							header("location:index.php");
							exit();


						}
						else{
							echo mysqli_error($con);
						}




					}else {
						echo 'old password donot match';

					}
				}
			}

		}else{
			echo mysqli_error($con);
			echo 'test';
		}
	}
}




// Define variables and initialize with empty values
$username = $pass = "";

if(isset($_POST['update_username'])){

	$username=$_POST['c_name'];
	$new_username=$_POST['n_name'];
	$pass=$_POST['pasd'];

	if ($username == $_SESSION['user']){


		//to check username does exits
		$sql ="SELECT * from user where username = '$username';";

		if ($result=mysqli_query($con,$sql)) {
 	//count number of rows in query result
			$rowcount=mysqli_num_rows($result);
       	//if no rows returned show no news alert
			if ($rowcount==0) {
       		# code...
				echo 'no username match';
			}
			else{
				// to make sure that the username is unique
				$sql1 ="SELECT * from user where username = '$new_username';";

				if ($result=mysqli_query($con,$sql)) {
 	//count number of rows in query result
					$rowcount=mysqli_num_rows($result);
       	//if no rows returned show no username in database
					if ($rowcount==0) {
       		# code...



						foreach ($result as $user) {
      	# code...
							$hashed_password=$user['password'];
							$id=$user['id'];



							if(password_verify($pass, $hashed_password)){

								$sql="UPDATE `user` SET `username`='$new_username'where username ='$username';";
								if ($result=mysqli_query($con,$sql)){

									$sql="UPDATE `homestay_info` SET `owner_name`='$new_username'where `owner_name` ='$username';";
									$result1=mysqli_query($con,$sql);

							// Unset all of the session variables
									$_SESSION = array();

// Destroy the session.
									session_destroy();
									session_start();

                            // Store data in session variables
									$_SESSION["loggedin"] = true;

									$_SESSION["id"] = $id;
									$_SESSION["user"] = $new_username;
									echo 'test';
									echo '<script>alert("username changed");</script>';

									header("location:index.php");
									exit();


								}
								else{
									echo mysqli_error($con);
								}




							}else {
								echo ' password do not match <a href="home.php">please click here</a>';

							}
						}
					}
					echo "please change username! username already exits.<a href='home.php'>please click here</a>";
				}

			}

			}
		}
		else{
			echo 'something went wrong <a href="home.php">please click here</a>';
		}
	}




	?>