<?php require("libs/fetch_data.php");?>

<html lang="zxx">
<head>
	<title><?php echo $row['title']; ?>|<?php getwebname("titles");?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<link id="browser_favicon" rel="shortcut icon" href="favicon/homestay_nepal.ico">
	<meta charset="utf-8" name="description" content="<?php getshortdescription("titles");?>">
	<meta name="keywords" content="<?php getkeywords("titles");?>" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="css/single.css">
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/fontawesome-all.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
	rel="stylesheet">
	<!--additional javascripts will be placed here-->
	<?php getjavascripts("links"); ?>
</head>

<body>
	<!--Header-->
	<?php include("header.php");?> 
	<!--//header-->
	<!--update database on page views-->
	





	<?php  
	require("database/db_connect.php");
    if(isset($_POST['save'])){
        $sql = "INSERT INTO newsletter (email)
        VALUES ('".$_POST["email"]."');";
    
        if(mysqli_query($con,$sql)){
   			echo "<p>Thank you!</p>  <a href ='/project_hstay_final'>go to home<a>";
		}
	
	else{
	echo "<p>sry try again :-( </p>";
	}

}
    ?>
									<!--footer-->
									<?php include("footer.php");?>
									<!---->
									<!-- js -->
									<script src="js/jquery-2.2.3.min.js"></script>
									<!-- //js -->
									<!--/ start-smoth-scrolling -->
									<script src="js/move-top.js"></script>
									<script src="js/easing.js"></script>
									<script>
										jQuery(document).ready(function ($) {
											$(".scroll").click(function (event) {
												event.preventDefault();
												$('html,body').animate({
													scrollTop: $(this.hash).offset().top
												}, 900);
											});
										});
									</script>
									<!--// end-smoth-scrolling -->

									<script>
										$(document).ready(function () {
			/*
									var defaults = {
							  			containerID: 'toTop', // fading element id
										containerHoverID: 'toTopHover', // fading element hover id
										scrollSpeed: 1200,
										easingType: 'linear' 
							 		};
							 		*/

							 		$().UItoTop({
							 			easingType: 'easeOutQuart'
							 		});

							 	});
							 </script>
							 <a href="#home" class="scroll" id="toTop" style="display: block;">
							 	<span id="toTopHover" style="opacity: 1;"> </span>
							 </a>

							 <!-- //Custom-JavaScript-File-Links -->
							 <script src="js/bootstrap.js"></script>


							</body>

							</html>