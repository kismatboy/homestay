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
  color: white;
  display: none;
  padding: 50px;
  text-align: center;
}

/* Style each tab content individually */ 
#host {background-color:orange;}
#homestay {background-color:green;}
    td {
  padding:10px 10px 10px 10px;

}

</style>
  
</head>
<body>
    <div id="wrapper">
        
      
        <!--/. NAV TOP  -->
       <?php require'nav.php'; ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                           homestay <small> information</small>
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



                


<div id="host" class="tabcontent">
  <!--to create table      -->
<forms>

    <legend style="color:black"><b>HOMESTAY INFORMATION</b></legend>
    <table>
    <tr>
        <td>Name </td>
        <td ><input type="text" name="name" placeholder="name"> </td>
</tr>

<tr>
    <td>Tag Line</td>
    <td >
<textarea rows="2" cols="50" placeholder="*tagline"></textarea>

    </td>
</tr>
<tr>
    <td>About</td>
<td >
<textarea rows="5" cols="50 name="homestay_info" placeholder="*enter brief description about homestay"></textarea>
</td>
</tr>
<tr>
        <td>Address</td>
        <td ><select name="address_catagories" >
            <option value="Pokhara">Pokhara</option>
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
       <td > <textarea rows="5" cols="50" name="meal_info" placeholder="Input details about the available meal plans and their respective price"></textarea>
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
       <td > <textarea rows="5" cols="50" name="rules_info" placeholder="Input details about the rules and regulations"></textarea>
      </td>
   </tr>
<tr>
        <td>Programs</td>
       <td > <textarea rows="5" cols="50" name="program_info" placeholder="Input details about the programs conducted"></textarea>
      </td>
   </tr>
<tr><td>upload photo</td>
    <td><input type="file" name="image" id="image"></td>
</tr>

<tr><td></td>
<td  ><input  style="color:#fff; background-color: black" type="submit" name="insert" id="insert" value="insert"></td>
</tr>
</table>
</form>



</div>

<div id="homestay" class="tabcontent">
  <table>
       <tr>
        <td>Name </td>
        <td><input type="text" name="fname" placeholder="FIRST NAME"></td>
    
        <td  align="right"><input type="text" name="lname" placeholder="LAST NAME"></td>
    </tr> 
    <tr>
        <td colspan="2" align="left">Photo </td>
        <td align="right"><input type="file" name="img" id="img"></td>
    </tr>

    <tr>
        <td>Email </td>
        <td><input type="text" name="email" placeholder="eg:abc@gmail.com"> </td>
    </tr>
  <tr>
        <td>About </td>
        <td colspan="2">

<div class="adjoined-bottom">
        <div class="grid-container">
            <div class="grid-width-100">
                <div id="editor">
                    <h1>your homestay details</h1>
                    
                </div>
            </div>
        </div>
    </div>
    <script>
    initSample();
</script>
         </td>
    </tr>

<tr>
        <td> Youtube Link</td>
        <td>
        <textarea rows="5" cols="50" name="program_info" placeholder="upload a youtube video"></textarea> </td>
    </tr>
<tr><td></td>
<td  ><input style="color:#fff; background-color: black" type="submit" name="insert" id="insert" value="insert"></td>
</tr>

</table>

</form> 
</div>

<button class="tablink" onclick="openCity('host', this, 'orange')" id="defaultOpen">host</button>
<button class="tablink" onclick="openCity('homestay', this, 'green')">homestay</button>


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
