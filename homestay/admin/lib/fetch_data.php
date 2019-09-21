<?php 
function gethomestayid(){
	require("../db.php");
	$owner=$_SESSION['user'];
	$sql="SELECT * FROM homestay_info where owner_name='$owner';";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no news alert
		if ($rowcount==0) {
      		# code...
			echo 'No homestay information found!!';
		}else{
      	//if there are rows available display all the results
		foreach ($result as $id) {
      	# code...
			return $id['id'];
		}}
	}

	mysqli_close($con);
}
function insertpicture($uploading_FILES){
	include('db.php');
                 $user_id=$_SESSION['user'];
	 if($uploading_FILES["photo1"]["name"]!==''){
                     $pic_name = time() . '-' . $uploading_FILES["photo1"]["name"];
                     $target_file = "Gallery/" . basename($pic_name);
                     if($uploading_FILES['photo1']['size'] > 2000000) {
                      echo "<script type='text/javascript'> alert('Image size should not be greated than 2mb')</script>";
     

                     }
    // check if file exists
    elseif(file_exists($target_file)) {
      echo "<script type='text/javascript'> alert('File already exists')</script>";

    } else{ 
      if(move_uploaded_file($uploading_FILES["photo1"]["tmp_name"], $target_file)) {
        
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
    
}
echo 'please upload image first';
}
function getaddress($id){
  include('db.php');
  $sql="SELECT address FROM homestay_info where id = $id ";
  if ($result=mysqli_query($con,$sql))
  {
        //count number of rows in query result
    $rowcount=mysqli_num_rows($result);
        //if no rows returned show no news alert
    if ($rowcount==0) {
          # code...
      echo 'No address found!!';
    }
        //if there are rows available display all the results
    foreach ($result as $add ) {
        # code...
      echo ''.$add['address'].'';
    }
  }
}
  function gettitle($id){
  include('db.php');
  $sql="SELECT Title FROM homestay_info where id = $id ";
  if ($result=mysqli_query($con,$sql))
  {
        //count number of rows in query result
    $rowcount=mysqli_num_rows($result);
        //if no rows returned show no news alert
    if ($rowcount==0) {
          # code...
      echo 'No title found!!';
    }
        //if there are rows available display all the results
    foreach ($result as $add ) {
        # code...
      echo ''.$add['Title'].'';
    }
  }

  mysqli_close($con);
}
function getphonenum($id){
  include('db.php');
  $sql="SELECT * FROM user where homestay_id = $id";
  if ($result=mysqli_query($con,$sql))
  {
    foreach ($result as $phone ) {

      echo ''.$phone['phone'].'';
            }
          }

  mysqli_close($con);
}
