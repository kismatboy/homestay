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
              <title><?php echo $_SESSION['user'] ?> |Administrator </title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    
	<link rel="stylesheet" href="assets/css/morris.css">
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js//raphael-min.js"></script>
	<script src="assets/js/morris.min.js"></script>

   
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
</head>
<body>
    <div id="wrapper">

        

        <!--/. NAV TOP  -->
              <?php require'nav.php'; ?>

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
                        <a href="javascript:" class="nav-link "><i class="fa fa-home"></i>Room</a>
                        <ul >
                            <li class=""><a href="room.php" class="">Add Room</a></li>
                            <li class=""><a href="roomdel.php" class="">Remove Room</a></li>
                         
                        </ul>


                    <li>
                        <a href="gallery.php"><i class="fa fa-list"></i> gallery</a>
                    </li><li>
                        <a href="payment.php"><i class="fa fa-qrcode"></i> Payment</a>
                    </li>
                    <li>
                        <a style ="background-color:#225081!important;color:lime;" href="profit.php"><i class="fa fa-qrcode"></i> Profit</a>
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
                           Profit Details<small> </small>
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
				 
				 
            <div class="row">
			
				<?php 
				//index.php
				include('db.php');
				
					$user=$_SESSION['user'];
					$query = "SELECT * FROM payment where owner='$user'";
					$result = mysqli_query($con, $query);
					$chart_data = '';
					$tot = '';
					while($row = mysqli_fetch_array($result))
					{
					 $chart_data .= "{ date:'".$row["cout"]."', profit:".$row["fintot"] *10/100 ."}, ";
					 $tot = $tot + $row["fintot"] *10/100;
					}
					$chart_data = substr($chart_data, 0, -2);
				
?>
				 
				<br>
				<br>
				<br>
				<br><div id="chart"></div>
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
											<th>ID</th>
                                            <th>Name</th>
                                            <th>Check in</th>
											<th>Check out</th>
                                            <th>Room Rent</th>
											<th>Bed Rent</th>
											<th>Meals </th>
											<th>Gr.Total</th>
											
											
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
									<?php
										$user=$_SESSION['user'];
					$sql = "SELECT * FROM payment where owner='$user'";
										$re = mysqli_query($con,$sql);
										while($row = mysqli_fetch_array($re))
										{
										
											$id = $row['id'];
											
											if($id % 2 ==1 )
											{
												echo"<tr class='gradeC'>
													<td>".$row['id']." </td>
													<td>".$row['title']." ".$row['fname']." ".$row['lname']."</td>
													<td>".$row['cin']."</td>
													<td>".$row['cout']."</td>
													
													
													<td>$".$row['ttot']."</td>
													<td>$".$row['mepr']."</td>
													<td>$".$row['btot']."</td>
													<td>$".$row['fintot']."</td>
													</tr>";
											}
											else
											{
												echo"<tr class='gradeU'>
													<td>".$row['id']." </td>
													<td>".$row['title']." ".$row['fname']." ".$row['lname']."</td>
													
													<td>".$row['cin']."</td>
													<td>".$row['cout']."</td>
													
													
													<td>$".$row['ttot']."</td>
													<td>$".$row['mepr']."</td>
													<td>$".$row['btot']."</td>
													<td>$".$row['fintot']."</td>
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
<script>
Morris.Bar({
 element : 'chart',
 data:[<?php echo $chart_data; ?>],
 xkey:'date',
 ykeys:['profit'],
 labels:['Profit'],
 hideHover:'auto',
 stacked:true
});
</script>