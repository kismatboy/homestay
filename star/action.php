<?php
// session_start();
include 'class/Rating.php';
$rating = new Rating();
if(!empty($_POST['action']) && $_POST['action'] == 'userLogin') {
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	$loginDetails = $rating->userLogin($user, $pass);	
	$loginStatus = 0;
	$userName = "";
	if (!empty($loginDetails)) {
		$loginStatus = 1;
		$_SESSION['userid'] = $loginDetails[0]['userid'];
		$_SESSION['username'] = $loginDetails[0]['username'];		
		$_SESSION['avatar'] = $loginDetails[0]['avatar'];
		$userName = $loginDetails[0]['username'];
	}		
	$data = array(
		"username" => $userName,
		"success"	=> $loginStatus,	
	);
	echo json_encode($data);	
}
if(!empty($_POST['action']) && $_POST['action'] == 'saveRating' 
	&& !empty($_SESSION['userid']) 
	&& !empty($_POST['rating']) 
	&& !empty($_POST['itemId'])) {
		$userID = $_SESSION['userid'];	
		$rating->saveRating($_POST, $userID);	
		$data = array(
			"success"	=> 1,	
		);
		echo json_encode($data);		
}
if(!empty($_GET['action']) && $_GET['action'] == 'logout') {
	session_unset();
	session_destroy();
	header("Location:index.php");
}
?>