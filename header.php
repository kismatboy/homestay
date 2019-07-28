<!--Header-->
<header>
		<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the contact form - fixed at the bottom of the page */


/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  up: 0;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>


		<div class="top-bar_sub_w3layouts container-fluid">
			<div class="row">
				<div class="col-md-4 logo text-left">
					<a class="navbar-brand" href="index.php">
						<i class="fas fa-home"></i> HOMESTAY NEPAL</a>
				</div>
				<div class="col-md-4 top-forms text-center mt-lg-3 mt-md-1 mt-0">
					<span>Welcome Back!</span>
					<span class="mx-lg-4 mx-md-2  mx-1">						<!-- <a href="homestay/admin/test/login.php"> -->
						<a href="#">
							<i class="fas fa-lock"></i> <strong><button class="open-button" onclick="openForm()">Sign In</button></strong></a>
					</span>
					<div class="form-popup" id="myForm">
  <form action="/action_page.php" class="form-container">
    <h1>Login</h1>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit" class="btn">Login</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>
					<span>
						<a href="homestay/admin/test/Register.php">
							<i class="far fa-user"></i> <strong>Register</strong></a>
					</span>
				</div>
				<div class="col-md-4 log-icons text-right">

					<ul class="social_list1 mt-3">

						<li>
							<a href="<?php getlinks("links","facebook");?>" class="facebook1 mx-2" >
								<i class="fab fa-facebook-f"></i>

							</a>
						</li>
						<li>
							<a href="<?php getlinks("links","twitter");?>" class="twitter2">
								<i class="fab fa-twitter"></i>

							</a>
						</li>
						<li>
							<a href="<?php getlinks("links","dribble");?>" class="dribble3 mx-2">
								<i class="fab fa-dribbble"></i>
							</a>
						</li>
						<li>
							<a href="<?php getlinks("links","pinterest");?>" class="pin">
								<i class="fab fa-pinterest-p"></i>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>

			<div class="header_top" id="home">
				<nav class="navbar navbar-expand-lg navbar-light bg-light">
					<button class="navbar-toggler navbar-toggler-right mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
						aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
				   </button>


					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav mr-auto">
							<li class="nav-item active">
								<a class="nav-link" href="index.php">Home
									<span class="sr-only">(current)</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="about.php">About</a>
							</li>
							
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
								    aria-expanded="false">
									Home Stays
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="#"></a>
									<?php getcategoriesmenu("location"); ?>
								</div>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="contact.php">Contact</a>
							</li>
							
							<li class="nav-item">
								<a class="nav-link" href="admin/reservation.php">reservation</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="terms.php">terms and conditions</a>
							</li>

						</ul>
						
							<form action="search.php" method="post" class="form-inline my-2 my-lg-0 header-search" name="form" >
							
								<input class="form-control mr-sm-2" type="search" placeholder="Search here..." required="yes" type="text" name="search[keyword]">
								<button class="btn btn1 my-2 my-sm-0" type="submit" name="submit"><i class="fas fa-search"></i></button>
							</form>
		
						

					</div>
				</nav>

			</div>
	</header>
	<!--//header-->




<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
