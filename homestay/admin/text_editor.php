<html>
<head>	
</head>
<body>

<form action="" method="POST">
	<textarea name="text"></textarea>
	<input type="submit" name="submit">
</form>
	<script src="text_editor/ckeditor.js"></script>
		<script type="text/javascript"> CKEDITOR.replace('text');</script>
<?php 
if(isset($_POST['submit'])){
	echo $_POST['text'];
}

?>
</body></html>



	