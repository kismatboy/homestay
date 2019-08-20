<?php
// session_start();
include 'star/class/Rating.php';
$rating = new Rating();

$rating->saveRating($_POST);	
		$data = array(
			"success"	=> 1,	
		);
		echo json_encode($data);
?>