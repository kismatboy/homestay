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
</head>
<body>
    <div id="wrapper">
               <?php require'nav.php'; ?>

        
        <!--/. NAV TOP  -->
        
        <!-- /. NAV SIDE  -->
       
        
       
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                           NEW ROOM <small></small>
                        </h1>
                    </div>
                </div> 
                 
                                 
            <div class="row">
                
                <div class="col-md-5 col-sm-5">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            ADD NEW ROOM
                        </div>
                        <div class="panel-body">
						<form name="form" method="post">
                            <div class="form-group">
                                            <label>Type Of Room *</label>
                                            <select name="troom"  class="form-control" required>
												<option value selected ></option>
                                               
                                                <option value="Deluxe Room">DELUXE ROOM</option>
												<option value="Single Room">SINGLE ROOM</option>
                                            </select>
                              </div>
							  
							 <div class="form-group">
                                            <label>Bedding Type</label>
                                            <select name="bed" class="form-control" required>
                                                <option value selected ></option>
                                                <option value="Single">Single</option>
                                                <option value="Double">Double</option>
                                                <option value="Triple">Triple</option>
                                                <option value="Quad">Quad</option>
                                                <option value="Triple">None</option>
                                                                                             
                                            </select>
                                            
                               </div>   
                               <div class="form-group">
                                            <label>number of room</label>
                                            <select name="room_no" class="form-control" required>
                                                <option value selected ></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="0">None</option>
                                                                                             
                                            </select>
                                            
                               </div>   
                               <div class="form-group">
                                            <label>price: Rs.</label>
                                            <input type="number" name="price">
                                            
                               </div>
							 <input type="submit" name="add" value="Add New" class="btn btn-primary"> 
							</form>
							<?php
							 include('db.php');
                 $user_id=$_SESSION['user'];
                             if(isset($_POST['add']))
							 {
										$room = $_POST['troom'];
                                        $no_of_room = $_POST['room_no'];
                                        $bed = $_POST['bed'];
                                        $price = $_POST['price'];
										$place = 'Free';
                                       
										
										$check="SELECT * FROM room WHERE type = '$room' AND bedding = '$bed' and owner='$user_id'
                                        ;";
										$rs = mysqli_query($con,$check);
                                        $rowcount=mysqli_num_rows($rs);
                                         if ($rowcount!=0) {
                                         echo "<script type='text/javascript'> alert('Room Already in Exists')</script>";
                                            }
										

										else
										{
                       if(empty(trim($_POST['price']))){
                                 echo "<script type='text/javascript'> alert('please enter price')</script>";
                             }
                                            
               else {
                                          $sql="SELECT id FROM homestay_info where owner_name='$user_id' ";
                                       $result=mysqli_query($con,$sql);
                                          foreach ($result as $row ) {
                                              $h_id=$row['id'];	
                                             }						 
										
										$sql ="INSERT INTO `room`( `type`, `bedding`,`place`,`price`,`no_of_room`,`h_id`,`owner`) VALUES ('$room','$bed','$place','$price','$no_of_room','$h_id','$user_id');" ;
										if(mysqli_query($con,$sql))
										{
										 echo '<script>alert("New Room Added") </script>' ;
										}else {
											echo '<script>alert("Sorry ! Check The System") </script>' ;
										}
                  }
							 }
							}
                        
							
							?>
                        </div>
                        
                    </div>
                </div>
                
                  
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            ROOMS INFORMATION
                        </div>
                        <div class="panel-body">
								<!-- Advanced Tables -->
                    <div class="panel panel-default">
                      
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Room ID</th>
                                            <th>Room Type</th>
											<th>Bedding</th>
                                            <th>num of room</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
									
									<?php
                        $sql = "select * from room where owner='$user_id' limit 0,10 ;";
                        $re = mysqli_query($con,$sql);
                        
										while($row= mysqli_fetch_array($re))
										{
												$id = $row['id'];
											if($id % 2 == 0) 
											{
												echo "<tr class=odd gradeX>
													<td>".$row['id']."</td>
													<td>".$row['type']."</td>
												   <th>".$row['bedding']."</th>
                                                   
                          <td>".$row['no_of_room']."</td>
												</tr>";
											}
											else
											{
												echo"<tr class=even gradeC>
													<td>".$row['id']."</td>
													<td>".$row['type']."</td>
												   <th>".$row['bedding']."</th>
                          <td>".$row['no_of_room']."</td>

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
