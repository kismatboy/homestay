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
				   <div class="ab-w3l-spa" id='about_host'>
                            <h3 class="title-w3-agileits title-black-wthree">About host</h3> 
						   <p class="about-para-w3ls"><?php gethostdetails($_REQUEST['id'],'user');?>
						 

										
								
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
					
			 		<h4> <i class="fa fa-briefcase" aria-hidden="true" style="color:yellow;"></i><br/>We include the following things: </h4>
			 		<?php getfeatures($_REQUEST['id'])?>
					
			 		
			 	</div>
			 </div>
			 <div class="col-md-6 advantage-grid right-w3ls wow zoomIn" data-wow-delay="0.3s">
			 	<div class="advantage-block">
					<i class="fa fa-clock-o" aria-hidden="true"></i>
			 		<h4>welcome:</h4>
			 		<?php getallowed($_REQUEST['id'])?>
					
			 	</div>
			 </div>
			<div class="clearfix"> </div>
			</div>
		</div>
	</div>
</div>
<!--//sevices-->

<!-- Gallery -->
<div class="team" id="team">
	<div class="container">
			<h3 class="title-w3-agileits title-black-wthree">Testimonial</h3>
			<div id="verticalTab">
				
					<div class="resp-tabs-container">

						<!-- video url iframe-->
						<?php getvideo($_REQUEST['id']);?>
					</div>
				</div>
			</div></div>

			<div class="team" id="team">
	<div class="container" id="Rules">
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
			<h3 class="title-w3-agileits title-black-wthree" id="location">location</h3>
			<div id="verticalTab">
				
					<div class="resp-tabs-container">

						<!-- video url iframe-->
						<?php getlocation($_REQUEST['id']);?>
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
				<div class="col-md-3 gallery-grid gallery1"><a href="homestay/admin/Gallery/'.$info["pic_name"].' " class="swipebox">
				<img src="homestay/admin/Gallery/'.$info["pic_name"].'" class="img-responsive" alt="Homestay nepal pic">
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
      <div class="plans-section" id="rooms ">
				 <div class="container" id='reservation'>
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
								 echo '<a href="homestay/admin/reservation.php?id='.$_REQUEST["id"].'" ><h3><span>$';
								 getprice($_REQUEST['id'],'deluxe Room');
								 echo '</span> </h3> <br/>Book Now</a>';
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
								 echo '<a href="homestay/admin/reservation.php?id='.$_REQUEST["id"].'" ><h3><span>$';
								 getprice($_REQUEST['id'],'single Room');
								 echo '</span> </h3> <br/>Book Now</a>';
								 ?>
								 	
								 </div>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
  <!--comments-->
  <div class="section" id="contact" >
  <div class="cc-contact-information" style="background-color: gray ;align-content: center;">
    <div class="container" >
      <div class="cc-contact">
        <div class="row">
          <div class="col-md-12">
            <div class="card mb-0" data-aos="zoom-in">
              <div class="h4 text-center title">Contacts</div>
              <div class="row">
                <div class="col-md-6">
                  <div class="card-body">
                    <form action="email.php" method="POST">
                      <div class="p pb-3"><strong>Feel free to contact us </strong></div>
                      <div class="row mb-3">
                        <div class="col">
                          <div class="input-group"><span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input class="form-control" type="text" name="name" placeholder="Name" required="required"/>
                          </div>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <div class="col">
                          <div class="input-group"><span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            <input class="form-control" type="email" name="replyto" placeholder="E-mail" required="required"/>
                          </div>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <div class="col">
                          <div class="input-group"><span class="input-group-addon"><i class="fa fa-file-text"></i></span>
                            <input class="form-control" type="text" name="subject" placeholder="Subject" required="required"/>
                          </div>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <div class="col">
                          <div class="input-group"><span class="input-group-addon"><i class="fa fa-comments"></i></span>
                            <textarea class="form-control" name="message" placeholder="Your Message" required="required"></textarea>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <button class="btn btn-primary" type="submit">Send</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card-body">
                    <p class="mb-0"><strong>Address </strong></p>
                    <!--id homestay ko $id-->
                 <p class="pb-2"><?php getaddress($id)?></p>
                    <p class="mb-0"><strong>Phone</strong></p>
                    <p class="pb-2">+977-<?php getphonenum($id)?></p>
                    <p class="mb-0"><strong>Email</strong></p>
                    <p><?php getemail($id)?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!--comments-->
  <!-- visitors -->
<!--   <div class ='row' style="padding: 100px 0px;">
	<div class="w3l-visitors-agile" >
		<div class="container">
                 <h3 class="title-w3-agileits title-black-wthree">What other visitors experienced</h3> 
		</div>
		<div class="w3layouts_work_grids">
			<ul class="slides">
				<style type="text/css">
					.checked{
						color:yellow;

					}
				</style>
 	
				<?php getstarreview($id);?>
				</ul><br/><br/>
				<div style="color:black; border: 3px;">
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star"></span>
				<form class="col-md-6">
					<input type="text" name="username" placeholder="username" style="width:300px;background-color: white;"><br/>
					<input type="text" name="title" placeholder="username" style="width: 300px;background-color: white;">
					<textarea type="text" name="username" placeholder="username" style="width: 100%"></textarea> 
					choose your avtar:<br/><input type="file" name="avtar" >
					<input type="submit" name="submit" value="submit">
				</form>
				</div>


		</div>	
	</div>

</div> -->
  <!-- visitors -->


<script src="https://www.powr.io/powr.js?platform=html"></script><div  style="margin-top: 10px;" class="powr-comments" id="f1e0a67e_1564676927"></div>
 <?php //getcommentsscript("links"); 
?>

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


