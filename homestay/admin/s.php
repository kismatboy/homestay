<?php  
session_start();  
if(!isset($_SESSION["user"]))
{
 header("location:index.php");
}
?> 
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Homestay nepal</title>
	<!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- Morris Chart Styles-->
   
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
</head>
<body>
    <div id="wrapper">
        
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php"><?php echo $_SESSION["user"]; ?> </a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="usersetting.php"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="settings.php"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
       <?php require'nav.php'; ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                           News letters<small> panel</small>
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
				 <?php
				include('db.php');
				$mail = "SELECT * FROM `contact`";
				$rew = mysqli_query($con,$mail);
				
			   ?>
				 <div class="row">
                <div class="col-md-12">
                    <div class="jumbotron">



                




<!--to create table      -->
<form >
    <legend style="color:black"><b>HOMESTAY INFORMATION</b></legend>
    <table>
    <tr>
        <td>Name </td>
        <td style="padding:10px 10px 10px 10px"><input type="text" name="name" placeholder="name"> </td>
</tr>
<tr>
    <td>Tag Line</td>
    <td style="padding:10px 10px 10px 10px"><input type="text" name="tag" placeholder="tagline"></td>
</tr>
<tr>
        <td>Address</td>
        <td style="padding:10px 10px 10px 10px"><select name="address_catagories" >
            <option value="Pokhara">Pokhara</option>
            <option value="Kathmandu">Kathmandu</option>
            <option value="Mustang">Mustang</option>
            </select>
        </td>
</tr> 
<tr>
    <td>Location </td>
<td style="padding:10px 10px 10px 10px"> <input type="text" name="location" placeholder="location"></td>
    </tr>
    <tr>
       <td> Meals</td>
       <td style="padding:10px 10px 10px 10px"> <input type="text" name="meals" placeholder="meals"></td>
 
    </tr>
    <tr>
        <td>Features </td>
        <td style="padding:10px 10px 10px 10px">
            <input type="checkbox" name="features[]" value="internet"><label>Internet</label>
            <input type="checkbox" name="features[]" value="laundry"><label>Laundry</label>
            <input type="checkbox" name="features[]" value="laundry"><label>Parking</label>
        </td>
    </tr>
    <tr>
        <td>Rules</td>
        <td style="padding:10px 10px 10px 10px"><input type="text" name="rules" placeholder="Enter the rules to be followed!!"></td>

    </tr>
    <tr>
        <td>Programs</td>
        <td style="padding:10px 10px 10px 10px"><input type="text" name="programs" placeholder="Enter the programs happening"></td>
    </tr>
    <tr>
    <td><input type="file" name="image" id="image"></td>
<td><input type="submit" name="insert" id="insert" value="insert"></td> 
</tr>


</table>
</div>
</form>







<!---HOSTTTTTT-->

<br><br><br><br><br>
<form>
    <legend style="color:black"><b> HOST INFORMATION</b></legend>
 
<table>
       <tr>
        <td>Name </td>
        <td><input type="text" name="fname" placeholder="FIRST NAME"></td>
        <td><input type="text" name="lname" placeholder="LAST NAME"></td>
    </tr> 
    <tr>
        <td>Photo </td>
        <td><input type="file" name="img" id="img"></td>
    </tr>

    <tr>
        <td>Email </td>
        <td><input type="text" name="email" placeholder="eg:abc@gmail.com"> </td>
    </tr>
<tr>
        <td>About </td>
        <td><input type="text" name="about" placeholder="enter your brief info."> </td>
    </tr>

<tr>
        <td> Youtube Link</td>
        <td><input type="text" name="link" placeholder="upload a youtube video"</td>
    </tr>


</table>

</form>







<!--USER'S INFO-->

<br><br><br><br><br><br>
<form>
    <legend style="color:black"><b> USER'S INFORMATION</b></legend>
    <table>
        <tr>
            <td>Title </td>
            <td>
                <select name="title">
                    <option value="Mr">Mr</option>
                    <option value="Mrs">Mrs</option>
                    <option value="Miss">Miss</option>
                    <option value="Dr">Dr</option>
                    </select>
            </td>
        </tr>


<tr>
        <td>Name </td>
        <td><input type="text" name="fname" placeholder="FIRST NAME"></td>
    

        <td><input type="text" name="lname" placeholder="LAST NAME"></td>
    </tr> 
    <tr>
            <td>Email </td>
            <td><input type="text" name="email" placeholder="eg:abc@gmail.com" ></td>
        </tr>
 <tr>
            <td>Password </td>
            <td><input type="password" name="password" placeholder="enter password!"></td>
        </tr>
 <tr>
            <td>Nationality</td>
            <td><select name="nationality">
                <option value="Nepali">Nepali</option>
                    <option value="Indian">Indian</option>
                    <option value="Chinese">Chinese</option>
                    <option value="Canadian">Canadian</option>
            </select></td>
        </tr>
 <tr>
            <td>Phone No. </td>
            <td><input type="number" name="phone_no" ></td>
        </tr>



    </table>
</form>

                        </div>
							<?php
							if(isset($_POST['log']))
							{	
								$log ="INSERT INTO `newsletterlog`(`title`, `subject`, `news`) VALUES ('$_POST[title]','$_POST[subject]','$_POST[news]')";
								if(mysqli_query($con,$log))
								{
									echo '<script>alert("New Room Added") </script>' ;
											
								}
								
							}
							
								
							?>
                          
                        </p>
						
                    </div>
                </div>
            </div>
               <?php
				
				$sql = "SELECT * FROM `newsletter`";
				$re = mysqli_query($con,$sql);
				
			   ?>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Date</th>
											<th>Status</th>
											<th>Approval</th>
											<th>Remove</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
									<?php
										while($row = mysqli_fetch_array($re))
										{
										
											$id = $row['id'];
											
											if($id % 2 ==1 )
											{
												echo"<tr class='gradeC'>
													<td>".$row['full_name']."</td>
													
													<td>".$row['email']."</td>
													<td>".$row['c_date']."</td>
													<td>".$row['approval']."</td>
													<td><a href=newsletter.php?id=".$id ." <button class='btn btn-primary'> <i class='fa fa-edit' ></i> Permission</button></td>
													<td><a href=newsletterdel.php?eid=".$id ." <button class='btn btn-danger'> <i class='fa fa-edit' ></i> Delete</button></td>
												</tr>";
											}
											else
											{
												echo"<tr class='gradeU'>
													<td>".$row['full_name']."</td>
													
													<td>".$row['email']."</td>
													<td>".$row['c_date']."</td>
													<td>".$row['approval']."</td>
													<td><a href=newsletter.php?id=".$id." <button class='btn btn-primary'> <i class='fa fa-edit' ></i> Permission</button></td>
													<td><a href=newsletterdel.php?eid=".$id ." <button class='btn btn-danger'> <i class='fa fa-edit' ></i> Delete </button></td>		
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
                <!-- /. ROW  -->
            
                </div>
               
            </div>
        
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
    
   
</body>
</html>
