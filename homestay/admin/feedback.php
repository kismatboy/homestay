<?php  
session_start();  
if(!isset($_SESSION["user"]))
{
 header("location:test/login.php");
}
?> 
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
        <title><?php echo $_SESSION['user'] ?> |Administrator </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
               <?php require'nav.php'; ?>

        
        <!--/. NAV TOP  -->
        
        <!-- /. NAV SIDE  -->
                <!--  nav side bar--> 
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a class="" href="home.php"><i class="fa fa-dashboard"></i> Status</a>
                    </li>
                    <li>
                        <a href="http://localhost/project_hstay_selected/homestay/admin/messages.php"><i class="fa fa-desktop"></i> News Letters</a>
                    </li>
                    <li>
                        <a href="roombook.php"><i class="fa fa-bar-chart-o"></i> Room Booking</a>
                    </li>

                    <li  >
                        <a ><i class="fa fa-home"></i>Room</a>
                        <ul >
                            <li ><a  href="room.php" class=""><p >Add Room</p></a></li>
                            <li class=""><a href="roomdel.php" class="">Remove Room</a></li>
                         
                        </ul>


                    <li>
                        <a href="gallery.php"><i class="fa fa-list"></i> gallery</a>
                    </li><li>
                        <a href="payment.php"><i class="fa fa-qrcode"></i> Payment</a>
                    </li>
                    <li>
                        <a  href="profit.php"><i class="fa fa-qrcode"></i> Profit</a>
                    </li> <li class="divider"></li>
                     <li><a href="" class="nav-link active-menu" style ="background-color:#225081!important;color:lime;"><i class="fa fa-user fa-fw"></i>Feedback</a>
                        </li>
                        <li class="divider"></li>
                    <li>
                        <a href="test/logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                   


                    
                    </ul>

            </div>

        </nav>

                <!--  nav side bar--> 

       
        
       
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                          <center>Your Feedback</center>
                        </h1>
                    </div>
                </div> 
                 
                                 
            <div class="row">
                
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                          Send Your Feedback.
                        </div>
                        <div class="panel-body">
						<form name="form" method="post" action=''>
                              <div class="form-group">
                                            <label>subject</label>
                                          <input type="text" style="width: 100%;" name='subject'></textarea>
                              </div>
                            <div class="form-group">
                                            <label>Message</label>
                                          <textarea style="width: 100%;height: 220px" name='msg'></textarea>
                              </div>

							  
							 
                             
							 <input type="submit" name="send" value="send" class="btn btn-primary"> 
							</form>


							
                        </div>
                        
                    </div>
                </div>
                <?php 
                if (isset($_POST['send'])){
                include ('../../libs/PHPMailer/sendmail.php');
                $message=$_POST['msg'];
                $subject= 'feedback from homestay owners:' .$_POST['subject'] ;


                send_mail('homestaypkr@gmail.com',$_SESSION["user"],$subject,$message);
            }


                ?>
         
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
    
   
</body>
</html>
