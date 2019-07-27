<?php
  function process_image($table,$field,$_FILES['voucher']){
    include'../db.php';
     $error = "";
    // for the database
    $voucherName = time() . '-' . $_FILES["voucher"]["name"];
    // For image upload
    $target_dir = "images/";
    $target_file = $target_dir . basename($voucherName);
    // VALIDATION
    // validate image size. Size is calculated in Bytes
    if($_FILES['voucher']['size'] > 2000) {
      return "Image size should not be greated than 200Kb";

      $error='Image size should not be greated than 200Kb'
    }
    // check if file exists
    if(file_exists($target_file)) {
      return "File already exists";
      $error='File already exists'

    }
    // Upload image only if no errors
    if (empty($error)) {
      if(move_uploaded_file($_FILES["voucher"]["tmp_name"], $target_file)) {
        $sql = "INSERT INTO $table SET $field='$voucherName';";
        if(mysqli_query($conn, $sql)){
          $msg = "Image uploaded and saved in the Database";
      return 'success';
        } else {
          return "There was an error in the database";
          
        }
      } else {
       return "There was an error uploading the file";
      }
    }
    else{
    }
  
}
?>