<?php
include('db.php');
?>
<?php //code to get the item using its id
include("database/conn.php");//database config file
$id=$_REQUEST['id']; $query="SELECT * from homestay_info where id='".$id."'"; $result=mysqli_query($GLOBALS["___mysqli_ston"],$query) or die ( ((is_object($GLOBALS["___mysqli_ston"]))? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ?$___mysqli_res : true)));
$row = mysqli_fetch_assoc($result); ?>
<!DOCTYPE html>
<html lang="en">
<head>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">
<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
<link rel="stylesheet" href="css/jquery-ui.css" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
<!--fonts-->
<link href="//fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Federo" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
<!--//fonts-->
</head>
<body>
<!-- //Modal1 -->
<div id="availability-agileits">
<div class="col-md-12 book-form-left-w3layouts">
	<?php  
echo '<a href="homestay/admin/reservation.php?id=' .$_REQUEST['id'] . '"><h2>ROOM RESERVATION</h2></a>'
	?>
</div>

			<div class="clearfix"> </div>
</div>
<!-- banner-bottom -->
	<div class="banner-bottom">
		<div class="container">	
			<div class="agileits_banner_bottom">
				<h3><span>Experience a good stay, enjoy fantastic offers</span> Find our friendly welcoming reception</h3>
			</div>
			<div class="w3ls_banner_bottom_grids">
				<ul class="cbp-ig-grid">
					<li>
						<div class="w3_grid_effect">
							<span class="cbp-ig-icon w3_road"></span>
							<h4 class="cbp-ig-title">MASTER BEDROOMS</h4>
<!-- 							<span class="cbp-ig-category">SUN RISE</span>
 -->							<span class="cbp-ig-category"><?php gethomestayname($_REQUEST['id'],'homestay_info')?></span>
						</div>
					</li>
					<li>
						<div class="w3_grid_effect">
							<span class="cbp-ig-icon w3_cube"></span>
							<h4 class="cbp-ig-title">home experience</h4>
							<span class="cbp-ig-category"><?php gethomestayname($_REQUEST['id'],'homestay_info')?></span>
						</div>
					</li>
					<li>
						<div class="w3_grid_effect">
							<span class="cbp-ig-icon w3_users"></span>
							<h4 class="cbp-ig-title">LARGE CAFE</h4>
							<span class="cbp-ig-category"><?php gethomestayname($_REQUEST['id'],'homestay_info')?></span>
						</div>
					</li>
					<li>
						<div class="w3_grid_effect">
							<span class="cbp-ig-icon w3_ticket"></span>
							<h4 class="cbp-ig-title">WIFI COVERAGE</h4>
							<span class="cbp-ig-category"><?php gethomestayname($_REQUEST['id'],'homestay_info')?></span>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
<!-- //banner-bottom -->
<!-- /about -->
 	<div class="about-wthree" id="about">
		  <div  style=" height: 400px;  width: 100%; max-width: 900px; margin-left: auto;
  margin-right: auto;
 ">
				   <div class="ab-w3l-spa">
                            <h3 class="title-w3-agileits title-black-wthree">About host</h3> 
						   <p class="about-para-w3ls"><?php gethostdetails($_REQUEST['id'],'owner_info');?>
						 

										
								
		          </div>
    </div>
</div>
 	<!-- //about -->
<!--sevices-->
<div class="advantages">
	<div class="container">
		<div class="advantages-main">
				<h3 class="title-w3-agileits"> Our services</h3>
		   <div class="advantage-bottom">
			 <div class="col-md-6 advantage-grid left-w3ls wow bounceInLeft" data-wow-delay="0.3s">
			 	<div class="advantage-block ">
					<i class="fa fa-credit-card" aria-hidden="true"></i>
			 		<h4>We include the following things: </h4>
					<p><i class="fa fa-check" aria-hidden="true"></i>bike for use</p>
					<p><i class="fa fa-check" aria-hidden="true"></i>laundry</p>
										<p><i class="fa fa-check" aria-hidden="true"></i>internet access</p>
															<p><i class="fa fa-check" aria-hidden="true"></i>parking</p>
					<p><i class="fa fa-check" aria-hidden="true"></i>breakfast</p>


					<p><i class="fa fa-check" aria-hidden="true"></i>Stay First, Pay After!</p>
			 		
			 	</div>
			 </div>
			 <div class="col-md-6 advantage-grid right-w3ls wow zoomIn" data-wow-delay="0.3s">
			 	<div class="advantage-block">
					<i class="fa fa-clock-o" aria-hidden="true"></i>
			 		<h4>welcome:</h4>
					<p><i class="fa fa-check" aria-hidden="true"></i>male</p>
					<p><i class="fa fa-check" aria-hidden="true"></i>female</p>
					<p><i class="fa fa-check" aria-hidden="true"></i>couples</p>
					<p><i class="fa fa-check" aria-hidden="true"></i>students</p>
					<p><i class="fa fa-check" aria-hidden="true"></i>family</p>
			 	</div>
			 </div>
			<div class="clearfix"> </div>
			</div>
		</div>
	</div>
</div>
<!--//sevices-->
<!-- family -->

<!-- 	<div class="container">
			<h3 class="title-w3-agileits title-black-wthree">our homestay members</h3>
			<div id="verticalTab">
				
					<div class="resp-tabs-container">
					
						<h4>Lucas Jimenez</h4>
							 <?php 
 										// getfamilyname($_REQUEST['id'],'family');
 										?>
							
					
			</div>
	</div>
</div> -->
<!-- //team -->
<!-- Gallery -->
<div class="team" id="team">
	<div class="container">
			<h3 class="title-w3-agileits title-black-wthree">Testimonial</h3>
			<div id="verticalTab">
				
					<div class="resp-tabs-container">

						<!-- video url iframe-->
						<iframe width="640" height="360" src="https://www.youtube.com/embed/ObUlz88BEfA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
				</div>
			</div></div>

			<div class="team" id="team">
	<div class="container">
			<h3 class="title-w3-agileits title-black-wthree">Rules:-</h3>
			<div id="verticalTab">
				
					<div class="resp-tabs-container">

						<!-- video url iframe-->
						<?php getrules($_REQUEST['id']); ?>
					</div>
				</div>
			</div></div>
				<div class="team" id="team">
	<div class="container">
			<h3 class="title-w3-agileits title-black-wthree">location</h3>
			<div id="verticalTab">
				
					<div class="resp-tabs-container">

						<!-- video url iframe-->
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14064.061429000583!2d83.9760808!3d28.206846!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6eeff1f9febe0a28!2sLa+grandee+international+college!5e0!3m2!1sen!2sua!4v1563893544965!5m2!1sen!2sua" width="715" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
				</div>
			</div></div>




<section class="portfolio-w3ls" id="gallery">
	<h3 class="title-w3-agileits title-black-wthree">Gallery</h3>
		<?php
		require("database/db_connect.php");
$sql="SELECT * FROM gallery where homestay_id=".$row['id'];
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no script alert
		if ($rowcount==0) {
      		# code....
      		#no  family record found.
      		echo "no  photos found";
		}
		$a=1;
      	//if there are rows available display all the results
		foreach ($result as $info) {
      	# code...
			echo '
				<div class="col-md-3 gallery-grid gallery1"><a href="homestay/images/'.$info["pic_name"].' " class="swipebox">
				<img src="homestay/images/'.$info["pic_name"].'" class="img-responsive" alt="test">
						<div class="textbox">
						<h4>'.$row['title'].'</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
				</a>
				</div>';
	}
	mysqli_close($con);
}
		?>

				
				<div class="clearfix"> </div>
</section>
	 <!-- rooms & rates -->
      <div class="plans-section" id="rooms">
				 <div class="container">
				 <h3 class="title-w3-agileits title-black-wthree">Rooms And Rates</h3>
						<div class="priceing-table-main">
							<div style=" margin-right: 100px;"></div>
				 <div class="col-md-6 price-grid">
					<div class="price-block agile">
						<div class="price-gd-top">
						<img src="homestay/images/r1.jpg" alt=" " class="img-responsive" />
							<h4>Deluxe Room</h4>
						</div>
						<div class="price-gd-bottom">
							   <div class="price-list">
									<ul>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
									
								     </ul>
							</div>
							<div class="price-selet">	
								<?php
								 echo '<a href="homestay/admin/reservation.php?id='.$_REQUEST["id"].'" ><h3><span>$150</span> </h3> <br/>Book Now</a>';
								 ?>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-md-6 price-grid wthree lost">
					<div class="price-block agile">
						<div class="price-gd-top ">
							<img src="homestay/images/r4.jpg" alt=" " class="img-responsive" />
							<h4>Single Room</h4>
						</div>
						<div class="price-gd-bottom">
							<div class="price-list">
								<ul>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								</ul>
							</div>
							<div class="price-selet">

								<?php
								 echo '<a href="homestay/admin/reservation.php?id='.$_REQUEST["id"].'" ><h3><span>$150</span></h3> <br/>Book Now</a>';
								 ?>						</div>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
  <!-- visitors -->
  <div class ='row'>
	<div class="w3l-visitors-agile" >
		<div class="container">
                 <h3 class="title-w3-agileits title-black-wthree">What other visitors experienced</h3> 
		</div>
		<div class="w3layouts_work_grids">
 	
					<ul class="slides">
						<li>
							<div class="w3layouts_work_grid_left col-md-4">
								<img src="homestay/images/5.jpg" alt=" " class="img-responsive" />
								<div class="w3layouts_work_grid_left_pos">
									<img src="homestay/images/c1.jpg" alt=" " class="img-responsive" />
								</div>
							</div>
							<div class="w3layouts_work_grid_right col-md-6" style="padding-top:0;margin-top:0">
								<h4>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								Worth to come again
								</h4>
								<p>Sed tempus vestibulum lacus blandit faucibus. 
									Nunc imperdiet, diam nec rhoncus ullamcorper, nisl nulla suscipit ligula, 
									at imperdiet urna. </p>
								<h5>Julia Rose</h5>
								<p>Germany</p>
							</div>
							<div class="clearfix"> </div>
</li>
					</ul>

		</div>	
	</div>

</div>
  <!-- visitors -->

<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- contact form -->
<script src="js/jqBootstrapValidation.js"></script>

<!-- /contact form -->	
<!-- Calendar -->
		<script src="js/jquery-ui.js"></script>
		<script>
				$(function() {
				$( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
				});
		</script>
<!-- //Calendar -->
<!-- gallery popup -->
<link rel="stylesheet" href="css/swipebox.css">
				<script src="js/jquery.swipebox.min.js"></script> 
					<script type="text/javascript">
						jQuery(function($) {
							$(".swipebox").swipebox();
						});
					</script>
<!-- //gallery popup -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!-- flexSlider -->
				<script defer src="js/jquery.flexslider.js"></script>
				<script type="text/javascript">
				$(window).load(function(){
				  $('.flexslider').flexslider({
					animation: "slide",
					start: function(slider){
					  $('body').removeClass('loading');
					}
				  });
				});
			  </script>
			<!-- //flexSlider -->
<script src="js/responsiveslides.min.js"></script>
			<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						  // Slideshow 4
						  $("#slider4").responsiveSlides({
							auto: true,
							pager:true,
							nav:false,
							speed: 500,
							namespace: "callbacks",
							before: function () {
							  $('.events').append("<li>before event fired.</li>");
							},
							after: function () {
							  $('.events').append("<li>after event fired.</li>");
							}
						  });
					
						});
			</script>
		<!--search-bar-->
		<script src="js/main.js"></script>	
<!--//search-bar-->
<!--tabs-->
<script src="js/easy-responsive-tabs.js"></script>
<script>
$(document).ready(function () {
$('#horizontalTab').easyResponsiveTabs({
type: 'default', //Types: default, vertical, accordion           
width: 'auto', //auto or any width like 600px
fit: true,   // 100% fit in a container
closed: 'accordion', // Start closed if in accordion view
activate: function(event) { // Callback function if tab is switched
var $tab = $(this);
var $info = $('#tabInfo');
var $name = $('span', $info);
$name.text($tab.text());
$info.show();
}
});
$('#verticalTab').easyResponsiveTabs({
type: 'vertical',
width: 'auto',
fit: true
});
});
</script>
<!--//tabs-->
<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	
	<div class="arr-w3ls">
	<a href="#home" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	</div>
<!-- //smooth scrolling -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
</body>
</html>


