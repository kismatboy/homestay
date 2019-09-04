<?php

// Initialize the session
session_start();

if (isset($_POST['send_feedback'])) {
  // echo "<script>alert('".$_POST['msg']."')</script>";
  include 'libs/PHPMailer/sendmail.php';
  $message=$_POST['msg'];
  send_mail('homestaypkr@gmail.com',$_POST['f_name'],'feedback from users:',$message);
}

// Include config file
include "database/db_connect.php";

// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";


	// Define variables and initialize with empty values
$username = $password = $confirm_password =$email =$name= "";
$username_err = $password_err = $confirm_password_err = $email_err=$name_err="";


// Processing form data when form is submitted

if(isset($_POST['login'])){
   
    $username = mysqli_real_escape_string($con,trim($_POST["username"])); 
  

    $password = mysqli_real_escape_string($con,trim($_POST["password"]));
  

    // Validate credentials
  if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
    $sql = "SELECT id, username, password FROM user WHERE username = ?";

    if($stmt = mysqli_prepare($con, $sql)){
            // Bind variables to the prepared statement as parameters
      mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set parameters
      $param_username = $username;

            // Attempt to execute the prepared statement
      if(mysqli_stmt_execute($stmt)){
                // Store result
        mysqli_stmt_store_result($stmt);

                // Check if username exists, if yes then verify password
        if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
          mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
          if(mysqli_stmt_fetch($stmt)){
            if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
              session_start();

                            // Store data in session variables
              $_SESSION["loggedin"] = true;

              $_SESSION["id"] = $id;
              $_SESSION["user"] = $username;

                            // Redirect user to welcome page
              header("location: homestay/admin/home.php");
            } else{
               echo "<script>alert('password incorrect');</script>";

                            // Display an error message if password is not valid
              $password_err = "The password you entered was not valid.";
            }
          }
        } else{
           echo "<script>alert('password incorrect1');</script>";
                    // Display an error message if username doesn't exist
          $username_err = "No account found with that username.";
        }
      } else{
         echo "<script>alert('password incorrect2');</script>";
        echo "Oops! Something went wrong. Please try again later.";
      }
    }

        // Close statement
    mysqli_stmt_close($stmt);
          // Close connection
    mysqli_close($con);


  }
$_POST["username"]='';
$_POST["password"]='';
}

  


//for sign up.


// Processing form data when form is submitted
  if(isset($_POST['signup'])){


   // Validate name
    if(empty($_POST["name"])){
      $name_err = "Please enter a name.";     

    } else{
      $name =mysqli_real_escape_string($con,$_POST["name"]);
    }

    // Validate email
    if(empty(trim($_POST["email"]))){
      $email_err = "Please enter a email.";
    } else{
        // Prepare a select statement
      $sql = "SELECT id FROM user WHERE email = ?";

      if($stmt = mysqli_prepare($con, $sql)){
            // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "s", $param_email);

            // Set parameters
        $param_email = trim($_POST["email"]);

            // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
          /* store result */
          mysqli_stmt_store_result($stmt);

          if(mysqli_stmt_num_rows($stmt) == 1){
            $email_err = "This email is already taken.";
          } else{
            $email = trim($_POST["email"]);
          }
        } else{
          echo "Oops! Something went wrong. Please try again later.";
        }
        mysqli_stmt_close($stmt);
      }

        // Close statement

    }
       // Validate username
    if(empty($_POST["username"])){
      $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
      $sql = "SELECT id FROM user WHERE username = ?";

      if($stmt = mysqli_prepare($con, $sql)){
            // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set parameters
        $param_username = trim($_POST["username"]);

            // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
          /* store result */
          mysqli_stmt_store_result($stmt);

          if(mysqli_stmt_num_rows($stmt) == 1){
            $username_err = "This username is already taken.";
          } else{
            $username = mysqli_real_escape_string($con,trim($_POST["username"]));
          }
        } else{
          echo "Oops! Something went wrong. Please try again later.";
        }
      }

        // Close statement
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
      $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
      $password_err = "Password must have atleast 6 characters.";
    } else{
      $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
      $confirm_password_err = "Please confirm password.";     
    } else{
      $confirm_password = trim($_POST["confirm_password"]);
      if(empty($password_err) && ($password != $confirm_password)){
        $confirm_password_err = "Password did not match.";
      }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){

        // Prepare an insert statement
      $sql = "INSERT INTO user (full_name,email,username, password) VALUES (?, ?,?,?)";

      if($stmt = mysqli_prepare($con, $sql)){
            // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "ssss", $param_fullname,$email,$param_username, $param_password);

            // Set parameters
        $param_fullname = $name;
        $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            $param_email =  $email;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){

              $s="insert into homestay_info (owner_name) values( '$param_username');";
                               

             
              if($r=mysqli_query($con,$s)){

                // $sql1 = "SELECT * from user where username='$param_username'";
$sqll="select * from user where username='$param_username';";
                if($s=mysqli_query($con,$sqll)){
                       foreach ($s as $id) {
                         $_SESSION["loggedin"] = '';
              $_SESSION["user"] = '';
                 $_SESSION['id'] ='';
                 session_destroy();
       //session started
                 session_start();
                   $_SESSION["loggedin"] = true;

            
              $_SESSION["user"] = $param_username;
                 $_SESSION['id'] =$id['id'];
                  header("location: homestay/admin/home.php");
                 }
               }
              }else{
                 echo 'error... 1' . mysqli_error($con);
              }

              // session start
                // Redirect to login page
             
            } else{
              echo "Something went wrong. Please try again later.";
            }

            mysqli_stmt_close($stmt);
          }
          else{
            echo 'error... 2' . mysqli_error($con);
          }

        // Close statement

        }
        else{
          echo mysqli_error($con);
        }

    // Close connection
        mysqli_close($con);
      }
    ?>
    <!--Header-->
    <header>

      <style>
        body {font-family: Arial, Helvetica, sans-serif;}

 

        /* Set a style for all buttons */


        button:hover {
          opacity: 0.8;
        }

        /* Extra styles for the cancel button */
        .cancelbtn {
          width: auto;
          padding: 10px 18px;
          background-color: gray;
        }

        /* Center the image and position the close button */
        .imgcontainer {
          text-align: center;
          margin: 24px 0 12px 0;
          position: relative;
        }

        img.avatar1 {
          width: 40%;
          border-radius: 50%;
        }

        .container {
          padding: 16px;
        }

        span.psw {
          float: right;
          padding-top: 16px;
        }

        /* The Modal (background) */
        .modal {
          display: none; /* Hidden by default */
          position: fixed; /* Stay in place */
          z-index: 10; /* Sit on top */
          left: 0;
          top: 0;
          width: 100%; /* Full width */
          height: 100%; /* Full height */
          overflow: auto; /* Enable scroll if needed */
          background-color: rgb(0,0,0); /* Fallback color */
          background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
          padding-top: 60px;
        }

        /* Modal Content/Box */
        .modal-content {
          background-color: #fefefe;
          margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
          border: 1px solid #888;
          width: 80%;
          max-width: 700px; /* Could be more or less, depending on screen size */
        }

        /* The Close Button (x) */
        .close {
          position: absolute;
          right: 25px;
          top: 0;
          color: #000;
          font-size: 35px;
          font-weight: bold;
        }

        .close:hover,
        .close:focus {
          color: red;
          cursor: pointer;
        }

        /* Add Zoom Animation */
        .animate {
          -webkit-animation: animatezoom 0.6s;
          animation: animatezoom 0.6s
        }

        @-webkit-keyframes animatezoom {
          from {-webkit-transform: scale(0)} 
          to {-webkit-transform: scale(1)}
        }

        @keyframes animatezoom {
          from {transform: scale(0)} 
          to {transform: scale(1)}
        }

        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 300px) {
          span.psw {
           display: block;
           float: none;
         }

       }
     </style>
   </head>
   <body>
    <!-- <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button> -->


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
      .form-container input[type=text], .form-container input[type=password] , .form-container input[type=email] {
        width: 100%;
        padding: 15px;
        margin: 5px 0 22px 0;
        border: none;
        background: #f1f1f1;
      }

      /* When the inputs get focus, do something */
      .form-container input[type=text]:focus, .form-container input[type=password]:focus, .form-container input[type=email]:focus {
        background-color: #ddd;
        outline: none;
      }

      /* Set a style for the submit/login button */
      .form-container .btn1 {
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
        opacity: 5;
        background: lime;
      }


      /* Full-width input fields */
      input[type=text], input[type=password] {
        width: 100%;
        padding: 15px;
        margin: 5px 0 22px 0;
        display: inline-block;
        border: none;
        background: #f1f1f1;
      }

      /* Add a background color when the inputs get focus */
      input[type=text]:focus, input[type=password]:focus {
        background-color: #ddd;
        outline: none;
      }

      /* Set a style for all buttons */
      button {
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
        opacity: 0.9;
      }

      /* Float cancel and signup buttons and add an equal width */
      .cancelbtn, .signupbtn {
        float: left;
        width: 50%;
        padding: 14px 20px;
      }

      /* Add padding to container elements */
      .container {
        padding: 16px;
      }
      /* Clear floats */
      .clearfix::after {
        content: "";
        clear: both;
        display: table;
      }

      /* Change styles for cancel button and signup button on extra small screens */
      @media screen and (max-width: 300px) {
        .cancelbtn, .signupbtn {
         width: 100%;
       }
     }
     <style>
     body {font-family: Arial, Helvetica, sans-serif;}
     * {box-sizing: border-box;}

     /* Full-width input fields */
     input[type=text], input[type=password] {
      width: 100%;
      padding: 15px;
      margin: 5px 0 22px 0;
      display: inline-block;
      border: none;
      background: #f1f1f1;
    }

    /* Add a background color when the inputs get focus */
    input[type=text]:focus, input[type=password]:focus {
      background-color: #ddd;
      outline: none;
    }

    /* Set a style for all buttons */
    button {
      background-color: #4CAF50;
      color: white;
      padding: 14px 20px;
      margin: 5px 0;
      border: none;
      cursor: pointer;
      width: auto;
      opacity: 0.9;
    }

    button:hover {
      opacity:1;
    }

    /* Extra styles for the cancel button */
    .cancelbtn {
      float: left;
      width: 50%;
      background-color: gray;
    }

    /* Float cancel and signup buttons and add an equal width */
    .signupbtn {
      float: left;
      width: 50%;
      background-color:lime;
    }
    .signupbtn:hover{
     color: red;
     background-color:green;
   }

   /* Add padding to container elements */
   .container {
    padding: 16px;
  }

  /* Style the horizontal ruler */
  hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
  }

  /* The Close Button (x) */
  .close {
    position: absolute;
    right: 35px;
    top: 15px;
    font-size: 40px;
    font-weight: bold;
    color: #f1f1f1;
  }

  .close:hover,
  .close:focus {
    color: #f44336;
    cursor: pointer;
  }

  /* Clear floats */
  .clearfix::after {
    content: "";
    clear: both;
    display: table;
  }

  /* Change styles for cancel button and signup button on extra small screens */
  @media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
     width: 100%;
   }
 }

 /* Button used to open the chat form - fixed at the bottom of the page */
 .open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup chat - hidden by default */
.chat-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width textarea */
.form-container textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  resize: none;
  min-height: 200px;
}

/* When the textarea gets focus, do something */
.form-container textarea:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/send button */
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
   <span class="mx-lg-4 mx-md-2  mx-1">					
    <!-- <a href="homestay/admin/test/login.php"> -->
     <button  class="btn cancel" onclick="document.getElementById('id_login').style.display='block'" style="width:auto;"><i class="fas fa-lock"></i> <strong style="color: black;">Sign In</button></strong>

     <div id="id_login" class="modal"style="z-index: 11;overflow: scroll;">

      <form class="modal-content animate" action="" method="POST" style="max-width: 700px">
        <div class="imgcontainer">
          <span onclick="document.getElementById('id_login').style.display='none'" class="close" title="Close Modal" style="font-size: 20px">&times;</span>
          <img src="images/img_avatar2.png" alt="Avatar" class="avatar1">
        </div>

        <div class="container">
          <label for="uname"><b>Username</b></label>
          <input style ="width: 100%;
          padding: 12px 20px;
          margin: 8px 0;
          display: inline-block;
          border: 1px solid #ccc;
          box-sizing: border-box;" type="text" placeholder="Enter Username" name="username" required>

          <label for="psw"><b>Password</b></label>
          <input style="width: 100%;
          padding: 12px 20px;
          margin: 8px 0;
          display: inline-block;
          border: 1px solid #ccc;
          box-sizing: border-box;" type="password" placeholder="Enter Password" name="password" required>


          <p><input type="checkbox" checked="checked" name="remember"> Remember me</p>
          <br />

          <!-- <button type="submit">Login</button> -->
          <input style="width: 100px;height: 50px;font-size: 25px; background-color: green;" type="submit" value="login" name="login" />
        </div>

        <div class="container" style="background-color:#f1f1f1;">
          <button type="button" onclick="document.getElementById('id_login').style.display='none'" class="cancelbtn" style=" max-width: 200px;margin-left: 0px">Cancel</button>

          <span class="psw"><a style="color:blue;" href="#">Forgot password?</a></span>
        </div>
      </form>
    </div>


    <span >
      <button class="btn cancel" onclick="document.getElementById('id_reg').style.display='block'" ><i class="far fa-user"></i> <strong style="color:black;">Register</strong></button>
    </span>
    <div id="id_reg" class="modal" style="z-index: 11;overflow: auto;">

      <form class="modal-content animate" action="" method="post" >

        <div class="container">
         <span onclick="document.getElementById('id_reg').style.display='none'" class="close" title="Close Modal" style="font-size: 20px">&times;</span>
         <h1>Sign Up</h1>
         <p>Please fill in this form to create an account.</p>
         <hr>
         <div class=" <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">

          <label for="email"><b>Email</b></label>
          <input type="text" placeholder="Enter Email" name="email" required>
          <span class="help-block"><?php echo $email_err; ?></span>

          <div class=" <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
            <label>full name</label>
            <input type="text" name="name" placeholder="enter full name" value="">
            <span class="help-block"><?php echo $name_err; ?></span>


          </div>
          <div class=" <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
            <label>Username</label>
            <input type="text" name="username"  placeholder="enter username"  value="<?php echo $username; ?>">
            <span class="help-block"><?php echo $username_err; ?></span>
          </div>    
          <div class="<?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
            <label>Password</label>
            <input type="password" name="password"  value="<?php echo $password; ?>">
            <span class="help-block"><?php echo $password_err; ?></span>
          </div>
          <div class="<?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
            <label>Confirm Password</label>
            <input type="password" name="confirm_password"  value="<?php echo $confirm_password; ?>">
            <span class="help-block"><?php echo $confirm_password_err; ?></span>
          </div>
          <label>
            <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
          </label>

          <h4>By creating an account you agree to our <a href="http://localhost/project_hstay_selected/terms.php" style="color:dodgerblue">Terms & Privacy</a>.</h4>

          <div class="clearfix" >

            <button type="button" onclick="document.getElementById('id_reg').style.display='none'" class="cancelbtn">Cancel</button>


            <input style="margin-top: 5px;height:45px;" type="submit" class="signupbtn"  name='signup' >
          </div>
        </div>
      </form>
    </div>
  </div>
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


  </header>
  <!--//header-->


  <button class="open-button" style="background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.9;
  position: fixed;
  bottom: 23px;
  right: 55px;
  width: 280px;border-radius: 50%;width: 90px;background-color: green;  z-index: 9;" onclick="openForm_chat()">Feedback</button>

  <div class="chat-popup" id="myForm_chat">
    <form action="" class="form-container" name="feedback" method="post">
      <h3>Give Your Feedback</h3>
      <input type="text" name="f_name" placeholder="enter your name" required>

<!--     <label for="msg"><b>Message</b></label>
-->    <textarea placeholder="Type message.." name="msg" required></textarea>

<button type="submit" class="btn" name="send_feedback" >Send</button>
<center> <button type="button" class="btn cancel" style="border-radius: 50%;width: 90px;" onclick="closeForm_chat()">Close</button></center>
</form>
</div>



<script>
  function openForm_chat() {
    document.getElementById("myForm_chat").style.display = "block";
  }

  function closeForm_chat() {
    document.getElementById("myForm_chat").style.display = "none";
  }
</script>







<script>
  function openForm() {
    document.getElementById("myForm").style.display = "block";
  }

  function closeForm() {
    document.getElementById("myForm").style.display = "none";
  }
// Get the modal
var modal_reg = document.getElementById('id_reg');
var modal_login = document.getElementById('id_login');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal_reg ) {
    modal_reg.style.display = "none";
  } 
  if (event.target == modal_login) {
    modal_login.style.display = "none";
  }
}

</script>
