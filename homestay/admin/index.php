<?php  
      session_start();  
      if(isset($_SESSION["user"]))
{
 header("location:home.php");
       exit();

}
else{
      echo' <script language="javascript" type="text/javascript"> alert("User name and password Added") </script>';
					
      header("location:/project_hstay_selected/");   
      exit();
  }
 ?>