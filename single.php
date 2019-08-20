<?php require("libs/fetch_data.php");?>
<?php //code to get the item using its id
include("database/conn.php");//database config file
$id=$_REQUEST['id'];
$query="SELECT * from homestay_info where id='".$id."'";
$result=mysqli_query($GLOBALS["___mysqli_ston"],$query) or die ( ((is_object($GLOBALS["___mysqli_ston"]))? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ?$___mysqli_res : true)));

$row = mysqli_fetch_assoc($result);
//pageview count query
$page=$row['title'];
$count="SELECT * FROM page_hits WHERE page='".$page."'";

$feedback=mysqli_query($GLOBALS["___mysqli_ston"],$count) or die ( ((is_object($GLOBALS["___mysqli_ston"]))? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ?$___mysqli_res : true)));

$roo=mysqli_fetch_assoc($feedback);
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title><?php echo $row['title']; ?>|<?php getwebname("titles");?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<link id="browser_favicon" rel="shortcut icon" href="homestay/admin/profile_pic/<?php echo $row['photo']; ?>">
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

	<!-- //for-mobile-apps -->
	<link href="homestay/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="homestay/css/font-awesome.css" rel="stylesheet"> 
	<link rel="stylesheet" href="homestay/css/chocolat.css" type="text/css" media="screen">
	<link href="homestay/css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
	<link rel="stylesheet" href="homestay/css/flexslider.css" type="text/css" media="screen" property="" />
	<link rel="stylesheet" href="homestay/css/jquery-ui.css" />
	<link href="homestay/css/style.css" rel="stylesheet" type="text/css" media="all" />
	<script type="text/javascript" src="homestay/js/modernizr-2.6.2.min.js"></script>
	<!--fonts-->
	<link href="//fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Federo" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<!--  for ajax -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
</head>

<body>

	<!--for facebook comment-->
	<div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v4.0"></script>

	<!-- for facebook comment end-->
	<!--Header-->
	<?php include("header.php");?>
						<!-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav mr-auto">
							<li class="nav-item active">
								<a class="nav-link" href="index.php">Home
									<span class="sr-only">(current)</span>
								</a>
							</li>
							<li class="nav-item">
								<p></p>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#about_host"> Host</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#location">Location</a>
							</li>
							
							<li class="nav-item">
								<a class="nav-link" href="#reservation">Reservation</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#Rules">Rules</a>
							</li>

						</ul>
						
							<form action="search.php" method="post" class="form-inline my-2 my-lg-0 header-search" name="form" >
							
								<input class="form-control mr-sm-2" type="search" placeholder="Search here..." required="yes" type="text" name="search[keyword]">
								<button class="btn btn1 my-2 my-sm-0" type="submit" name="submit"><i class="fas fa-search"></i></button>
							</form>
		
						

					</div>
				</nav>

			</div> -->
			<!--//header-->
			<!--update database on page views-->
			<?php  require_once('database/connection.php');
			require_once('counter.php');
	$pn=updateCounter(''.$row['title'].''); // Updates page hits
	echo $pn;

	 updateInfo(); // Updates hit info 
	 ?>
	 <div class="banner-inner">
	 </div>

	 <ol class="breadcrumb">
	 	<li class="breadcrumb-item">
	 		<a href="index.php">Home</a>
	 	</li>
	 	<li class="breadcrumb-item active">Details</li>
	 </ol>

	 <!--//banner-->
	 <section class="banner-bottom">
	 	<!--/blog-->
	 	<div class="container"  style="margin-left: 60px;margin-right: 60px;max-width: 1200px;">
	 		<div class="row">
	 			<!--left-->
	 			<div class="col-lg-8 left-blog-info-w3layouts-agileits text-left">
	 				<div class="blog-grid-top">
	 					<div class="b-grid-top">
	 						<div class="blog_info_left_grid">
	 							<a href="#">
	 								<img src="homestay/admin/profile_pic/<?php echo $row['photo']; ?>" class="img-fluid" alt="image not available" style="width:900px;height:300px">
	 							</a>
	 						</div>
	 						<div class="blog-info-middle">
	 							<ul>
	 								<li>
	 									<a href="#">
	 										<i class="far fa-calendar-alt"></i><?php echo $row['date']; ?></a>
	 									</li>
	 									<li class="mx-2">
	 										<a href="#">
	 											<i class="far fa-user"></i><?php echo $row['owner_name']; ?></a>
	 										</li>
	 										<li>
	 											<a href="#">
	 												<i class="far fa-tags"></i> <?php echo $row['tags']; ?></a>
	 											</li>
	 											<li>
	 												<a href="#">
	 													<i class="far fa-eye fa-x2"></i> <?php echo $roo['count']; ?></a>
	 												</li>

	 											</ul>
	 										</div>
	 									</div>

	 									<h3>
	 										<a href="single.html"><?php echo $row['title']; ?></a>
	 									</h3>
	 									<!--sharing script-->
	 									<?php getsharingscript("links"); ?>
	 									<?php echo $row['content']; ?>
	 								</div>

	 								<!--comments script will go here-->
	 								<div style="margin-top: 40px;">
	 									<?php require_once('homestay/index.php');
	 									?>

	 									<!-- Users comment start-->

	 									<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>



	 									<div class="container" style="margin-top: 60px;">
	 										<h2 style="margin-bottom: 20px;color:black;">Users Comment</h2>
	 										<form method="POST" id="comment_form">
	 											<div class="form-group">
	 												<input type="text" name="comment_name" id="comment_name" class="form-control" placeholder="Enter Name" />
	 											</div>
	 											<div class="form-group">
	 												<textarea name="comment_content" id="comment_content" class="form-control" placeholder="Enter Comment" rows="5"></textarea>
	 											</div>
	 											<div class="form-group">
	 												<input type="hidden" name="comment_id" id="comment_id" value="0" />
	 												<input type="hidden" name="h_id" id="comment_id" value="<?php echo $_GET['id']; ?>" />
	 												<input type="submit" name="submit_comment" id="submit" class="btn btn-info" value="Submit" />
	 											</div>
	 										</form>
	 										<span id="comment_message"></span>
	 										<br />
	 										<div id="display_comment"></div>
	 									</div>
	 									<script type="text/javascript">


	 										$(document).ready(function(){

	 											$('#comment_form').on('submit', function(event){
	 												event.preventDefault();
// alert("thank you!");
var form_data = $(this).serialize();
 // alert(form_data);
 $.ajax({
 	url:"add_comment.php",
 	method:"POST",
 	data:form_data,
 	dataType:"JSON",
 	success:function(data)
 	{
 		if(data.error != '')
 		{

 			$('#comment_form')[0].reset();
 			$('#comment_message').html(data.error);
 			$('#comment_id').val('0');
 			load_comment();
 		}
 	}
 })
});


function load_comment()
{
	$.ajax({
	url:"fetch_comment.php?id=<?php echo $_GET['id']; ?>",
	method:"POST",
	success:function(data)
	{
		$('#display_comment').html(data);
	}
})
}
load_comment();


$(document).on('click', '.reply', function(){
var comment_id = $(this).attr("id");
$('#comment_id').val(comment_id);
$('#comment_name').focus();
});

});
</script>

<!-- Users comment end-->


<!-- star comment -->
<script src="star/js/rating.js"></script>
<link rel="stylesheet" href="star/css/style.css">
<div class="container " style="width: 100%;">		
	<?php
	include 'star/class/Rating.php';
	$rating = new Rating();
	$itemDetails = $rating->getItem($_GET['id']);
	foreach($itemDetails as $item){
		$average = $rating->getRatingAverage($item["id"]);
		?>	
		<div class="row">
			<div class="col-sm-2" style="width:150px">
				<img class="product_image" src="image/<?php echo $item["image"]; ?>" style="width:100px;height:200px;padding-top:10px;">
			</div>
			<div class="col-sm-4">
				<h4 style=" margin-top:10px;"><?php echo $item["name"]; ?></h4>
				<div><span class="average"><?php printf('%.1f', $average); ?> <small>/ 5</small></span> <span class="rating-reviews"><a href="single.php?item_id=<?php echo $item["id"]; ?>">Rating & Reviews</a></span></div>
				<?php echo $item["description"]; ?>				
			</div>		
		</div>
	<?php } ?>	

	<?php	
	$itemRating = $rating->getItemRating($_GET['id']);	
	$ratingNumber = 0;
	$count = 0;
	$fiveStarRating = 0;
	$fourStarRating = 0;
	$threeStarRating = 0;
	$twoStarRating = 0;
	$oneStarRating = 0;	
	foreach($itemRating as $rate){
		$ratingNumber+= $rate['ratingNumber'];
		$count += 1;
		if($rate['ratingNumber'] == 5) {
			$fiveStarRating +=1;
		} else if($rate['ratingNumber'] == 4) {
			$fourStarRating +=1;
		} else if($rate['ratingNumber'] == 3) {
			$threeStarRating +=1;
		} else if($rate['ratingNumber'] == 2) {
			$twoStarRating +=1;
		} else if($rate['ratingNumber'] == 1) {
			$oneStarRating +=1;
		}
	}
	$average = 0;
	if($ratingNumber && $count) {
		$average = $ratingNumber/$count;
	}	
	?>		
	<br>		
	<div id="ratingDetails"> 		
		<div class="row">			
			<div class="col-sm-4">				
				<h4>Rating and Reviews</h4>
				<h2 class="bold padding-bottom-7"><?php printf('%.1f', $average); ?> <small>/ 5</small></h2>				
				<?php
				$averageRating = round($average, 0);
				for ($i = 1; $i <= 5; $i++) {
					$ratingClass = "btn-default btn-grey";
					if($i <= $averageRating) {
						$ratingClass = "btn-warning";
					}
					?>
					<button type="button" class="btn btn-sm <?php echo $ratingClass; ?>" aria-label="Left Align">
						<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
					</button>	
				<?php } ?>				
			</div>
			<div class="col-sm-4">
				<?php
				$fiveStarRatingPercent = round(($fiveStarRating/5)*100);
				$fiveStarRatingPercent = !empty($fiveStarRatingPercent)?$fiveStarRatingPercent.'%':'0%';	

				$fourStarRatingPercent = round(($fourStarRating/5)*100);
				$fourStarRatingPercent = !empty($fourStarRatingPercent)?$fourStarRatingPercent.'%':'0%';

				$threeStarRatingPercent = round(($threeStarRating/5)*100);
				$threeStarRatingPercent = !empty($threeStarRatingPercent)?$threeStarRatingPercent.'%':'0%';

				$twoStarRatingPercent = round(($twoStarRating/5)*100);
				$twoStarRatingPercent = !empty($twoStarRatingPercent)?$twoStarRatingPercent.'%':'0%';

				$oneStarRatingPercent = round(($oneStarRating/5)*100);
				$oneStarRatingPercent = !empty($oneStarRatingPercent)?$oneStarRatingPercent.'%':'0%';

				?>
				<div class="pull-left">
					<div class="pull-left" style="width:35px; line-height:1;">
						<div style="height:9px; margin:5px 0;">5 <span class="glyphicon glyphicon-star"></span></div>
					</div>
					<div class="pull-left" style="width:180px;">
						<div class="progress" style="height:9px; margin:8px 0;">
							<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="5" style="width: <?php echo $fiveStarRatingPercent; ?>">
								<span class="sr-only"><?php echo $fiveStarRatingPercent; ?></span>
							</div>
						</div>
					</div>
					<div class="pull-right" style="margin-left:10px;"><?php echo $fiveStarRating; ?></div>
				</div>

				<div class="pull-left">
					<div class="pull-left" style="width:35px; line-height:1;">
						<div style="height:9px; margin:5px 0;">4 <span class="glyphicon glyphicon-star"></span></div>
					</div>
					<div class="pull-left" style="width:180px;">
						<div class="progress" style="height:9px; margin:8px 0;">
							<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="4" aria-valuemin="0" aria-valuemax="5" style="width: <?php echo $fourStarRatingPercent; ?>">
								<span class="sr-only"><?php echo $fourStarRatingPercent; ?></span>
							</div>
						</div>
					</div>
					<div class="pull-right" style="margin-left:10px;"><?php echo $fourStarRating; ?></div>
				</div>
				<div class="pull-left">
					<div class="pull-left" style="width:35px; line-height:1;">
						<div style="height:9px; margin:5px 0;">3 <span class="glyphicon glyphicon-star"></span></div>
					</div>
					<div class="pull-left" style="width:180px;">
						<div class="progress" style="height:9px; margin:8px 0;">
							<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="3" aria-valuemin="0" aria-valuemax="5" style="width: <?php echo $threeStarRatingPercent; ?>">
								<span class="sr-only"><?php echo $threeStarRatingPercent; ?></span>
							</div>
						</div>
					</div>
					<div class="pull-right" style="margin-left:10px;"><?php echo $threeStarRating; ?></div>
				</div>
				<div class="pull-left">
					<div class="pull-left" style="width:35px; line-height:1;">
						<div style="height:9px; margin:5px 0;">2 <span class="glyphicon glyphicon-star"></span></div>
					</div>
					<div class="pull-left" style="width:180px;">
						<div class="progress" style="height:9px; margin:8px 0;">
							<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="5" style="width: <?php echo $twoStarRatingPercent; ?>">
								<span class="sr-only"><?php echo $twoStarRatingPercent; ?></span>
							</div>
						</div>
					</div>
					<div class="pull-right" style="margin-left:10px;"><?php echo $twoStarRating; ?></div>
				</div>
				<div class="pull-left">
					<div class="pull-left" style="width:35px; line-height:1;">
						<div style="height:9px; margin:5px 0;">1 <span class="glyphicon glyphicon-star"></span></div>
					</div>
					<div class="pull-left" style="width:180px;">
						<div class="progress" style="height:9px; margin:8px 0;">
							<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="5" style="width: <?php echo $oneStarRatingPercent; ?>">
								<span class="sr-only"><?php echo $oneStarRatingPercent; ?></span>
							</div>
						</div>
					</div>
					<div class="pull-right" style="margin-left:10px;"><?php echo $oneStarRating; ?></div>
				</div>
			</div>		
			<div class="col-sm-4">
				<button type="button" id="rateProduct" class="btn btn-info login">Rate this Homestay</button>
			</div>		
		</div>



		<div class="row">
			<div class="col-sm-12 col-md-12">
				<hr/>
				<div class="review-block">		
					<?php
					$itemRating = $rating->getItemRating($_GET['id']);
					foreach($itemRating as $rating){				
						$date=date_create($rating['created']);
						$reviewDate = date_format($date,"M d, Y");						
						$profilePic = "profile.png";	
						if($rating['avatar']) {
							$profilePic = $rating['avatar'];	
						}
						?>				
						<div class="row">
							<div class="col-sm-4">
								<img src="star/image/userpics/<?php echo $profilePic; ?>" class="img-rounded user-pic">
								<div class="review-block-name">By <a href="#"><?php echo $rating['username']; ?></a></div>
								<div class="review-block-date"><?php echo $reviewDate; ?></div>
							</div>
							<div class="col-sm-9">
								<div class="review-block-rate">
									<?php
									for ($i = 1; $i <= 5; $i++) {
										$ratingClass = "btn-default btn-grey";
										if($i <= $rating['ratingNumber']) {
											$ratingClass = "btn-warning";
										}
										?>
										<button type="button" class="btn btn-xs <?php echo $ratingClass; ?>" aria-label="Left Align">
											<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
										</button>								
									<?php } ?>
								</div>
								<div class="review-block-title"><?php echo $rating['title']; ?></div>
								<div class="review-block-description"><?php echo $rating['comments']; ?></div>
							</div>
						</div>
						<hr/>					
					<?php } ?>
				</div>
			</div>
		</div>	
	</div>
	<div id="ratingSection" style="display:none;">
		<div class="row">
			<div class="col-sm-12">
				<form id="ratingForm" method="POST">					
					<div class="form-group">
						<h4>Rate this Homestay</h4>
						<button type="button" class="btn btn-warning btn-sm rateButton" aria-label="Left Align">
							<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
						</button>
						<button type="button" class="btn btn-default btn-grey btn-sm rateButton" aria-label="Left Align">
							<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
						</button>
						<button type="button" class="btn btn-default btn-grey btn-sm rateButton" aria-label="Left Align">
							<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
						</button>
						<button type="button" class="btn btn-default btn-grey btn-sm rateButton" aria-label="Left Align">
							<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
						</button>
						<button type="button" class="btn btn-default btn-grey btn-sm rateButton" aria-label="Left Align">
							<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
						</button>
						<input type="hidden" class="form-control" id="rating" name="rating" value="1">
						<input type="hidden" class="form-control" id="itemId" name="itemId" value="<?php echo $_GET['id']; ?>">
						<input type="hidden" name="action" value="saveRating">
					</div>	
					<div class="form-group">
						<label for="usr">Name*</label>
						<input type="text" class="form-control" style="background-color:#fff; border: 2px solid #f1f1f2;" id="title" name="username" required>
					</div>	
					<div class="form-group">
						<label for="usr">Title*</label>
						<input type="text" class="form-control" id="title" name="title" required>
					</div>

					<div class="form-group">
						<label for="comment">Comment*</label>
						<textarea class="form-control" rows="5" id="comment" name="comment" required></textarea>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-info" id="saveReview">Save Review</button> <button type="button" class="btn btn-info" id="cancelReview">Cancel</button>
					</div>			
				</form>
			</div>
		</div>		
	</div>

<!-- 	<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="loginmodal-container">
				<h1>Login to rate this product</h1><br>
				<div style="display:none;" id="loginError" class="alert alert-danger">Invalid username/Password</div>
				<form method="post" id="loginForm" name="loginForm">
					<input type="text" name="user" placeholder="Username" required>
					<input type="password" name="pass" placeholder="Password" required>
					<input type="hidden" name="action" value="userLogin">
					<input type="submit" name="login" class="login loginmodal-submit" value="Login">					 
				</form>
				<div class="login-help">					
					<p><b>User</b> : adam, rose, smith, merry <b>Password</b>: 123</p>
				</div>
			</div>
		</div>
	</div> -->
</div>	

<!-- end star review -->




</div>
</div>
<!--right-->
<aside class="col-lg-4 col-md-4 agileits-w3ls-right-blog-con text-right" style="padding-left: 90px;">
	<div class="right-blog-info text-left">

		<div class="tech-btm widget_social">
			<h4>Stay Connected</h4>
			<ul>

				<li>
					<a class="twitter" href="<?php getlinks("links","twitter");?>">
						<i class="fab fa-twitter"></i>
						<span class="count"></span> Twitter</a>
					</li>
					<li>
						<a class="facebook" href="<?php getlinks("links","facebook");?>">
							<i class="fab fa-facebook-f"></i>
							<span class="count"></span> Facebook</a>
						</li>
						<li>
							<a class="dribble" href="<?php getlinks("links","dribble");?>">
								<i class="fab fa-dribbble"></i>

								<span class="count"></span> Dribble</a>
							</li>
							<li>
								<a class="pin" href="<?php getlinks("links","pinterest");?>">
									<i class="fab fa-pinterest"></i>
									<span class="count"></span> Pinterest</a>
								</li>

							</ul>
						</div>
						<div class="tech-btm">
							<h4>Featured Homestay</h4>
							<?php geteditorschoice("featured_homestay");?>
							<!--olderpostsendhere-->
						</div>

						<div class="tech-btm">
							<h4>recent homestay</h4>
							<?php getolderposts("homestay_info");?>

						</div>
					</div>
				</aside>
			</div></div>
			<div id="fb-root"></div>

		</section>
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

				$().UItoTop({
					easingType: 'easeOutQuart'
				});

			});
		</script>
		<a href="#home" class="scroll" id="toTop" style="display: circle;">
			<span id="toTopHover" style="opacity: 1;"> </span>
		</a>

		<!-- //Custom-JavaScript-File-Links -->
		<script src="js/bootstrap.js"></script>


	</body>

	</html>
