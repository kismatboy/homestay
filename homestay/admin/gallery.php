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
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
           <title><?php echo $_SESSION['user'] ?> |Administrator </title>

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
                        <a  href="home.php"><i class="fa fa-dashboard"></i> Status</a>
                    </li>
                    <li>
                        <a href="http://localhost/project_hstay_selected/homestay/admin/messages.php"><i class="fa fa-desktop"></i> News Letters</a>
                    </li>
                    <li>
                        <a href="roombook.php"><i class="fa fa-bar-chart-o"></i> Room Booking</a>
                    </li>

                    <li  >
                        <a class="nav-link "><i class="fa fa-home"></i>Room</a>
                        <ul >
                            <li class=""><a href="room.php" class="">Add Room</a></li>
                            <li class=""><a href="roomdel.php" class="">Remove Room</a></li>
                         
                        </ul>


                    <li>
                        <a style ="background-color:#225081!important;color:lime;" href="gallery.php"><i class="fa fa-list"></i> gallery</a>
                    </li><li>
                        <a href="payment.php"><i class="fa fa-qrcode"></i> Payment</a>
                    </li>
                    <li>
                        <a  href="profit.php"><i class="fa fa-qrcode"></i> Profit</a>
                    </li> <li class="divider"></li>
                     <li><a href="feedback.php"><i class="fa fa-user fa-fw"></i>Feedback</a>
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
                          Photo Gallery
                          <small></small>
                        </h1>
                    </div>
                </div> 
                 
                                 
            <div class="row">
                
                <div class="col-md-5 col-sm-5">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            ADD NEW Picture
                        </div>
                        <div class="panel-body">
            <form name="form" method="post"  enctype="multipart/form-data">
                            <div class="form-group">
                                            <label>add gallery pictures</label>
                                            
                                              <input name="photo1" type ="file" class="form-control">
                              </div>

               <input type="submit" name="insert" value="insert" class="btn btn-primary"> 
              </form> 
              <form name="form" method="post"  enctype="multipart/form-data">
                            <div class="form-group">
                                            <label>update homestay Profile Picture</label>
                                            
                                              <input name="photo1" type ="file" class="form-control">
                              </div>

               <input type="submit" name="update" value="insert" class="btn btn-primary"> 
              </form>
             <!--   <form name="form" method="post"  enctype="multipart/form-data">
                            <div class="form-group">
                                            <label>update Homestay icon</label>
                                            
                                              <input name="photo1" type ="file" class="form-control">
                              </div>

               <input type="submit" name="insert_icon" value="upload icon" class="btn btn-primary"> 
              </form> -->
              <?php
               include('db.php');
               include('lib/fetch_data.php');
                 $user_id=$_SESSION['user'];
                 $h_id =gethomestayid();
                             if(isset($_POST['insert']))
               {
                   
                    
                  if($_FILES["photo1"]["name"]!==''){
                     $pic_name = $_FILES["photo1"]["name"];
                     $target_file = "Gallery/" . basename($pic_name);
                     if($_FILES['photo1']['size'] > 2000000) {
                      echo "<script type='text/javascript'> alert('Image size should not be greated than 2mb')</script>";
     

                     }
    // check if file exists
    elseif(file_exists($target_file)) {
      echo "<script type='text/javascript'> alert('File already exists. please rename and try again')</script>";

    } else{ 
      if(move_uploaded_file($_FILES["photo1"]["tmp_name"], $target_file)) {
        
        $sql = "INSERT INTO `gallery`(`homestay_id`, `pic_name`) VALUES ('$h_id','$pic_name');";
        if(mysqli_query($con, $sql)){
       echo "<script type='text/javascript'> alert('Image uploaded and saved in the Database')</script>";
       echo mysqli_error($con);
         $msg = "Image uploaded and saved in the Database";
        } else {
       echo "<script type='text/javascript'> alert('error in uploading file to file server)</script>";
       echo mysqli_error($con);

          
        }
      } else {
       echo "<script type='text/javascript'> alert('There was an error uploading the file')</script>";
      }
    }
    
}              }  
              if(isset($_POST['update']))
               {
                   
                    
                  if($_FILES["photo1"]["name"]!==''){
                     $pic_name = $_FILES["photo1"]["name"];
                     $target_file = "profile_pic/" . basename($pic_name);
                     if($_FILES['photo1']['size'] > 2000000) {
                      echo "<script type='text/javascript'> alert('Image size should not be greated than 2mb')</script>";
     

                     }
    // check if file exists
    elseif(file_exists($target_file)) {
      echo "<script type='text/javascript'> alert('File already exists. please rename and try again')</script>";

    } else{ 
      if(move_uploaded_file($_FILES["photo1"]["tmp_name"], $target_file)) {
        
        $sql = "update homestay_info set photo ='$pic_name' where id='$h_id';";
        if(mysqli_query($con, $sql)){
       echo "<script type='text/javascript'> alert('Image uploaded and saved in the Database')</script>";
       echo mysqli_error($con);
         $msg = "Image uploaded and saved in the Database";
        } else {
       echo "<script type='text/javascript'> alert('error in uploading file to file server)</script>";
       echo mysqli_error($con);

          
        }
      } else {
       echo "<script type='text/javascript'> alert('There was an error uploading the file')</script>";
      }
    }
    
}
echo 'please upload image first';
              }
              if(isset($_POST['insert_icon']))
               {
                   
                    
                  if($_FILES["photo1"]["name"]!==''){
                     $pic_name = $_FILES["photo1"]["name"];
                     $target_file = "../icon/" . basename($pic_name);
                     if($_FILES['photo1']['size'] > 2000000) {
                      echo "<script type='text/javascript'> alert('Image size should not be greated than 2mb')</script>";
     

                     }
    // check if file exists
    elseif(file_exists($target_file)) {
      echo "<script type='text/javascript'> alert('File already exists. please rename and try again')</script>";

    } else{ 
      if(move_uploaded_file($_FILES["photo1"]["tmp_name"], $target_file)) {
        
        $sql = "update homestay_info set icon ='$pic_name' where id='$h_id';";
        if(mysqli_query($con, $sql)){
       echo "<script type='text/javascript'> alert('Image uploaded and saved in the Database')</script>";
       echo mysqli_error($con);
         $msg = "Image uploaded and saved in the Database";
        } else {
       echo "<script type='text/javascript'> alert('error in uploading file to file server)</script>";
       echo mysqli_error($con);

          
        }
      } else {
       echo "<script type='text/javascript'> alert('There was an error uploading the file')</script>";
      }
    }
    
}
echo 'please upload image first';
              }  
              ?>
                        </div>
                        
                    </div>
                </div>
                
                  
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                           YOUR PICTURES
                        </div>
                        <div class="panel-body">
                <!-- Advanced Tables -->
                    <div class="panel panel-default">
                      
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Picture</th>
                                            <th>delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                  
                  <?php
                        $sql = "select * from gallery where homestay_id='$h_id';";
                        $re = mysqli_query($con,$sql);
                        
                    while($row= mysqli_fetch_array($re))
                    {
                        $id = $row['id'];
                      if($id % 2 == 0) 
                      {
                        echo "<tr class=odd gradeX>
                          <td>".$row['homestay_id']."</td>
                          <td>".$row['pic_name']."</td>
                           <th> delete</th>
                                                   
                        </tr>";
                      }
                      else
                      {
                        echo"<tr class=even gradeC>
                          <td>".$row['homestay_id']."</td>
                          <td>".$row['pic_name']."</td>
                           <th> delete</th>
                                                   
                        </tr>";
                      
                      }
                    }
                  ?>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                    
                       
                            
                
               
               
                
                
                 
                       </div>
                        
                    </div>
                </div>
                
               
            </div>
                    
            
        
          </div>
       <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
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
