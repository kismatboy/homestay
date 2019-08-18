<?php

//add_comment.php

//$connect = new PDO('mysql:host=localhost;dbname=testing', 'root', '');
$con = mysqli_connect("localhost","root","","homestay_nepal") or die(mysql_error());

$connect = new PDO('mysql:host=localhost;dbname=homestay_nepal', 'root', '');

$error = '';
$comment_name = '';
$comment_content = '';

if(empty($_POST["comment_name"]))
{
 $error .= '<p class="text-danger">Name is required</p>';
}
else
{
 $comment_name = $_POST["comment_name"];
}

if(empty($_POST["comment_content"]))
{
 $error .= '<p class="text-danger">Comment is required</p>';
}
else
{
 $comment_content = $_POST["comment_content"];
}

if($error == '')
{

	//alert('hello');
 $query = "
 INSERT INTO comment 
 (parent_comment_id, homestay_id, comment, comment_sender_name)
 VALUES (:parent_comment_id, :h_id, :comment, :comment_sender_name)
 ";

 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   ':parent_comment_id' => $_POST["comment_id"],
   ':h_id' => $_POST["h_id"],
   ':comment'    => $comment_content,
   ':comment_sender_name' => $comment_name
  )
 );
 $error = '<label class="text-success">Comment Added</label>';
}

$data = array(
 'error'  => $error
);

echo json_encode($data);

?>