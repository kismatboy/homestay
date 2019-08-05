
<?php  
session_start();  
if(!isset($_SESSION["user"]))
{
 header("location:index.php");
}


include('db.php');
include('lib/fetch_data.php');
$user_id=$_SESSION['user'];
$h_id =gethomestayid();



if(isset($_POST['insert_h'])){
  $owner=$_SESSION['user'];
  $sql="SELECT * FROM homestay_info where owner_name='$owner';";
  if ($result=mysqli_query($con,$sql))
  {
        //count number of rows in query result
    $rowcount=mysqli_num_rows($result);
        //if no rows returned show no news alert
    if ($rowcount==0) {
          # code...
      echo 'No homestay information found!! Add homestay first';
    }else{
      echo $_POST['hostphone'];
        $hostname=$_POST['hostaddress'];
        $phone=$_POST['hostphone'];
        $email=$_POST['hostemail'];
        $about=$_POST['hostabout'];
        $img_file=$_FILES['hostimg']['temp'];
        //photo
        $sql="insert into user (email,phone,about,owner_id) VALUES ('$email','$phone','$phone','$about','$user_id')";
        if(mysqli_query($con,$sql)){
          echo $img_file;

        }else{
          echo mysqli_error($con);
        }

   
  }
  }
}
//host wala insert garni code.
//                   if($_FILES["img"]["name"]!==''){
//                      $pic_name = $_FILES["img"]["name"];
//                      $target_file = "Gallery/" . basename($pic_name);
//                      if($_FILES['photo1']['size'] > 2000000) {
//                       echo "<script type='text/javascript'> alert('Image size should not be greated than 2mb')</script>";


//                      }
//     // check if file exists
//     elseif(file_exists($target_file)) {
//       echo "<script type='text/javascript'> alert('File already exists')</script>";

//     } else{ 
//       if(move_uploaded_file($_FILES["photo1"]["tmp_name"], $target_file)) {

//         $sql = "INSERT INTO `gallery`(`homestay_id`, `pic_name`) VALUES ('$h_id','$pic_name');";
//         if(mysqli_query($con, $sql)){
//        echo "<script type='text/javascript'> alert('Image uploaded and saved in the Database')</script>";
//        echo mysqli_error($con);
//          $msg = "Image uploaded and saved in the Database";
//         } else {
//        echo "<script type='text/javascript'> alert('error in uploading file to file server)</script>";
//        echo mysqli_error($con);


//         }
//       } else {
//        echo "<script type='text/javascript'> alert('There was an error uploading the file')</script>";
//       }
//     }

// }
// echo 'please upload image first';
//               }  



if(isset($_POST['homestay_insert'])){
  // homestay wala
  $name=$_POST['name'];
  $tagline=$_POST['tagline'];
  $about=$_POST['about'];
  $address=$_POST['address'];
  $location=$_POST['location'];
  $meal=$_POST['meal'];
  $rules=$_POST['rules'];
  $y_link=$_POST['y_link'];

  $sql="SELECT id FROM homestay_info where owner_name = '$user_id'";

  if ($result=mysqli_query($con,$sql))
  {
        //count number of rows in query result
    $rowcount=mysqli_num_rows($result);
        //if no rows returned show no news alert
    if ($rowcount==0) {
          # code...
     //insert comand
      $sql_insert ="INSERT INTO `homestay_info`(`title`,`tags`,`owner_name`,`content`,`location`,`posted`,`category`,`meals`,`video_link`,`rules`) VALUES ( '$name','$tagline','$user_id','$about','$location','publish','$address','$meal','$y_link','$rules');";
      if( $rs=mysqli_query($con,$sql_insert)){
        echo 'success';

      }else{
        echo mysqli_error($con);
      }
    }
    else{
      // update command
      echo 'you have homestay information delete it first.';
    }

  }
  if($_FILES["image"]["name"]!==''){
   $pic_name = $_FILES["image"]["name"];
   $target_file = "profile_pic/" . basename($pic_name);
   if($_FILES['image']['size'] > 2000000) {
    echo "<script type='text/javascript'> alert('Image size should not be greated than 2mb')</script>";
  }
    // check if file exists
  elseif(file_exists($target_file)) {
    echo "<script type='text/javascript'> alert('File already exists')</script>";

  } else{ 
    if(move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {



      $sql = "update homestay_info set photo ='$pic_name' where id='$h_id';";
        if(mysqli_query($con, $sql)){
       echo "<script type='text/javascript'> alert('Image uploaded and saved in the Database')</script>";
       }else{
       echo mysqli_error($con);
        } 
      }else {
       echo "<script type='text/javascript'> alert('error in uploading file to file server)</script>";
       echo mysqli_error($con);


     }
   }}else{
echo 'please upload image first';

}  




}
?> 
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <script language="javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.0/jquery.min.js" type="text/javascript"></script>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
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
  <script src="text_editor/ckeditor.js"></script>
  <script src="text_editor/samples/js/sample.js"></script>
  <!--javascript-->
  <script>
    function openCity(cityName, elmnt, color) {
  // Hide all elements with class="tabcontent" by default */
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Remove the background color of all tablinks/buttons
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }

  // Show the specific tab content
  document.getElementById(cityName).style.display = "block";

  // Add the specific color to the button used to open the tab content
  elmnt.style.backgroundColor = color;
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();

</script>
<style>
  .tablink {
    background-color: #555;
    color: white;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    font-size: 17px;
    width: 25%;
  }

  /* Change background color of buttons on hover */
  .tablink:hover {
    background-color: #777;
  }

  /* Set default styles for tab content */
  .tabcontent {
    color: black;
    display: none;
    padding: 50px;
    text-align: center;
  }

  /* Style each tab content individually */ 
  #host {background-color:gray;}
  #homestay {background-color:gray;}
  td {
    padding:10px 10px 10px 10px;

  }
    #hiddenFormWrap{
        display: none;
    }

</style>

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
             homestay <small> information</small>
           </h1>
         </div>
       </div> 
       <div class="row">
        <div class="col-md-12">
           <button class="tablink" onclick="openCity('host', this, 'green')" id="defaultOpen">homestay</button>
        <button class="tablink" onclick="openCity('homestay', this, 'green')">host</button>
          <div id="host" class="tabcontent">
            <!--to create table      -->
            <form style="color:black"  action='' method="post" enctype="multipart/form-data">

              <legend><b>HOMESTAY INFORMATION</b></legend>
              <table >
                <tr>
                  <td >Name </td>
                  <td ><input type="text" name="name" placeholder="name"style="width:400px"> </td>
                </tr>

                <tr>
                  <td>Tag Line</td>
                  <td >
                    <textarea rows="2" cols="50" placeholder="*tagline" name="tagline"></textarea>

                  </td>
                </tr>
                <tr>
                  <td>About</td>
                  <td >
                    <textarea rows="5" cols="50" name ="about" placeholder="*enter brief description about homestay"></textarea>
                  </td>
                </tr>
                <tr>
                  <td>Address</td>
                  <td ><select name="address" >
                    <option value="Pokhara" >Pokhara</option>
                    <option value="Kathmandu">Kathmandu</option>
                    <option value="Mustang">Mustang</option>
                  </select>
                </td>
              </tr> 
              <tr>
                <td>Location(Google map iframe) </td>
                <td > <input type="textarea" name="location" placeholder="location"></td>
              </tr>
              <tr>
                <td> Meal Plan</td>
                <td > <textarea rows="5" cols="50" name="meal" placeholder="Input details about the available meal plans and their respective price"></textarea>
                </td>
              </tr>

              <tr>
                <td>Features </td>
                <td >
                  <input type="checkbox" name="features[]" value="internet"><label>   Internet  </label>
                  <input type="checkbox" name="features[]" value="laundry"><label>    Laundry  </label>
                  <input type="checkbox" name="features[]" value="parking"><label>Parking</label>
                </td>
              </tr>

              <tr>
                <td>Rules</td>
                <td > <textarea rows="5" cols="50" name="rules" placeholder="Input details about the rules and regulations"></textarea>
                </td>
              </tr>
              <tr>

                <tr><td>upload photo</td>
                  <td><input type="file" name="image" id="image"></td>
                </tr>
                <tr>
                  <td> Youtube Link</td>
                  <td>
                    <textarea rows="5" cols="50" name="y_link" placeholder="upload a youtube video"></textarea> </td>
                  </tr>
                  <tr><td></td>
                    <td  ><input  style="color:#fff; background-color: black" type="submit" name="homestay_insert" id="insert" value="insert"></td>
                  </tr>

                
              </form>
</table>
   <script type="text/javascript">
              $(document).ready(function(){
        $("#insert").click(function(){
            data = $("#editor").html();
            script (data);
            $("#useDataField").val(data);
            $("#formdata").submit();
        });
    });
        </script>


            </div>

            <div id="homestay" class="tabcontent">
             <legend><b>HOST INFORMATION</b></legend>
             <table>

              <form action='' method="post" id='formdata' enctype="multipart/form-data">
               <tr>
                <td >Name </td>
                <td  ><input style="width: 400px;margin-left: 50px;"type="text" name="hostname" placeholder="full NAME"></td>
              </tr>  
                 <tr>
                <td>phone number (+977)</td>
                <td  ><input style="width: 400px;margin-left: 50px;" type="number" name="hostphone" placeholder="phone number"></td>
              </tr>  
              
              <td>address </td>
                <td  ><input style="width: 400px;margin-left: 50px;"type="text" name="hostaddress" placeholder="address"></td>
              </tr> 
              <tr>
                <td  align="left">Photo </td>
                <td><input style="width: 400px;margin-left: 50px;" type="file" name="hostimg" id="img"></td>
              </tr>

              <tr>
                <td >Email </td>
                <td><input style="width: 400px;margin-left: 50px;" type="email" name="hostemail" placeholder="eg:abc@gmail.com"> </td>
              </tr>
              <tr>
                <td>About </td>
                <td >

                  
                    
                 

                  <div class="adjoined-bottom">
                    <div class="grid-container">
                      <div class="grid-width-100">
                        <div id="editor">
                          <div id="1">
                          <h1>your homestay details</h1>
                        </div>

                        </div>
                      </div>
                    </div>
                  </div>
                  <script>
                    initSample();
                 
                  </script>
                  <div id="hiddenFormWrap">
        <textarea type="hidden" name="divData" id="useDataField" ></textarea>
    </div>
                 

                  

                  
                </td>
              </tr>


              <tr><td></td>
                <td  ><input style="color:#fff; background-color: black" type="submit" name="insert_h1" id="insert" value="insert"></td>
              </tr>

            </table>

          </form> 
        </div>
    
        <?php
    $postedDiv = "";
    if(isset($_POST['insert_h1'])){
       echo  "You saved:" . $_POST['divData'];
    }
    ?>

       


<!-- 
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

<tr><td></td>
<td  ><input type="submit" name="insert" id="insert" value="insert"></td>
</tr>

    </table>
</form>
-->
</div>
</div>
</div>
</div>
</div>
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
