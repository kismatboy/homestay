<?php
  $msg = "";
  $msg_class = "";
  $conn = mysqli_connect("localhost", "root", "", "homestay_nepal");
  if (isset($_POST['save_profile'])) {
    // for the database
    $bio = stripslashes($_POST['bio']);
    $voucherName = time() . '-' . $_FILES["voucher"]["name"];
    // For image upload
    $target_dir = "images/";
    $target_file = $target_dir . basename($voucherName);
    // VALIDATION
    // validate image size. Size is calculated in Bytes
    if($_FILES['voucher']['size'] > 2000) {
      $msg = "Image size should not be greated than 200Kb";
      $msg_class = "alert-danger";
    }
    // check if file exists
    if(file_exists($target_file)) {
      $msg = "File already exists";
      $msg_class = "alert-danger";
    }
    // Upload image only if no errors
    if (empty($error)) {
      if(move_uploaded_file($_FILES["voucher"]["tmp_name"], $target_file)) {
        $sql = "INSERT INTO gallery SET pic_name='$voucherName';";
        if(mysqli_query($conn, $sql)){
          $msg = "Image uploaded and saved in the Database";
          $msg_class = "alert-success";
        } else {
          $msg = "There was an error in the database";
          $msg_class = "alert-danger";
        }
      } else {
        $error = "There was an erro uploading the file";
        $msg = "There was an error uploading the file";
      }
    }
  }
?>