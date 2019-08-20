<?php require("libs/fetch_data.php");

?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title><?php getwebname("titles"); echo"|"; gettagline("titles");?></title>
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
	<link rel="stylesheet" href="css/jquery.desoslide.css">
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/fontawesome-all.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
	rel="stylesheet">
  <link href="search/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
  <link href="search/css/romeo_main.css" rel="stylesheet" media="all">

</head>

<body>
	<?php include("header.php");?>
 <div class="header_top" id="home">
  <nav class="navbar navbar-expand-lg navbar-light bg-light" style="padding-right:10px;">
   <button class="navbar-toggler navbar-toggler-right mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
   aria-expanded="false" aria-label="Toggle navigation">
   <span class="navbar-toggler-icon"></span>
 </button>


 <div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav mr-auto">
   <li class="nav-item active">
    <a class="nav-link" href="index.php">Home
     <span class="sr-only">(current)</span>
   </a>
 </li>
 <li class="nav-item">
  <a class="nav-link" href="about.php">About</a>
</li>

						<!-- 	<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
								    aria-expanded="false">
									Home Stays
								</a>
								 <div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="#"></a>
									<?php //getcategoriesmenu("location");
									?>
								</div> 
							</li> -->
							<li class="nav-item">
								<a class="nav-link" href="contact.php">Contact</a>
							</li>
							
							<li class="nav-item">
								<a class="nav-link" href="index.php#search">reservation</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="terms.php">terms and conditions</a>
							</li>

						</ul>
						
           <form action="search.php" method="post" class="form-inline my-2 my-lg-0 header-search" name="form" >

            <input class="form-control mr-sm-2" type="search" placeholder="Search here..." required="yes" type="text" name="search[keyword]">
            <button class="btn btn1 my-2 my-sm-0" type="submit" name="submit"><i class="fas fa-search"></i></button>
          </form>



        </div>
      </nav>

    </div>
	<?php include("banner.php");?>
	               
	                <div  style=" height: 490px; margin-top: 50px; width: 100%; max-width: 900px; 
  margin-left: auto;
  margin-right: auto;
 
 ">


</head>

<body bgcolor="gray">


    <div style=" max-width: 680px; margin: 0 auto;" id="search">
        <div style="background: rgba(0, 0, 0, 0.8);">
                <div class="tab-content" style="height: 500px">
                                  
                                  


                                    <div class="tab-pane active" id="tab1">
                        <form  action="" method="post"  name="form">

                            <div class="input-group input-group-big" style="height:120px;">
                                <label class="label">where:</label>
                                <input class="input--style-1" type="text" name="search[keyword]" placeholder="City, region or specific hotel" required="required">
                                <i class="zmdi zmdi-search input-group-symbol"></i>
                            </div>
                            <div class="row row-space" style="height:100px;">
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <label class="label">check-in:</label>
                                        <input class="input--style-1" type="text" name="check-in" placeholder="mm/dd/yyyy" id="input-start">
                                    </div>
                                </div>
                                <div class="col-md-6" style="height:60px;">
                                    <div class="input-group">
                                        <label class="label">check-out:</label>
                                        <input class="input--style-1" type="text" name="check-out" placeholder="mm/dd/yyyy" id="input-end">
                                    </div>
                                </div>
                          	
                            <div class="row row-space" >
                                <div class="col-md-8" >
                                    <div class="input-group">
                                        <label class="label">travellers:</label>
                                        <div class="input-group-icon" id="js-select-special">
                                            <input class="input--style-1 input--style-1-small" type="text" name="traveller" value="1 Adult, 0 Children, 1 Room" disabled="disabled" id="info">
                                            <i class="zmdi zmdi-chevron-down input-icon"></i>
                                        </div>
                                        <div class="dropdown-select">
                                            <ul class="list-room">
                                                <li class="list-room__item">
                                                    <span class="list-room__name">Room 1</span>
                                                    <ul class="list-person">
                                                        <li class="list-person__item">
                                                            <span class="name">Adults</span>
                                                            <div class="quantity quantity1">
                                                                <span class="minus">-</span>
                                                                <input class="inputQty" type="number" min="0" value="1">
                                                                <span class="plus">+</span>
                                                            </div>
                                                        </li>
                                                        <li class="list-person__item">
                                                            <span class="name">Children</span>
                                                            <div class="quantity quantity2">
                                                                <span class="minus">-</span>
                                                                <input class="inputQty" type="number" min="0" value="0">
                                                                <span class="plus">+</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                            <div class="list-room__footer">
                                                <a href="#" id="btn-add-room">Add room</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3" >
                                    <button  style="outline: none;
  background: blue;
  border: none;
height:70px;"class="btn-submit" type="submit" name='search'>search</button>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Jquery JS-->
<script src="search/vendor/jquery/jquery.min.js"></script>
<!-- Vendor JS-->
<script src="search/vendor/select2/select2.min.js"></script>
<script src="search/vendor/jquery-validate/jquery.validate.min.js"></script>
<script src="search/vendor/bootstrap-wizard/bootstrap.min.js"></script>
<script src="search/vendor/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
<script src="search/vendor/datepicker/moment.min.js"></script>
<script src="search/vendor/datepicker/daterangepicker.js"></script>

<!-- Main JS-->
<script src="search/js/global.js"></script>






</div>
	<section class="bottom-slider">
		<div class="row">
		<div class="course_demo1">

			<ul id="flexiselDemo1">
				<?php getbottomsliderposts("homestay_info");?>
			</ul>
		</div>
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="embed-responsive embed-responsive-21by9">
							<iframe src="https://www.youtube.com"></iframe>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>
	<!--/main-->
	<section class="main-content-w3layouts-agileits">
		<div class="container">
			<div class="row">
				<!--left-->
				<div class="col-lg-8 left-blog-info-w3layouts-agileits text-left">
					<!--grid blogs below-->
					<div class="blog-girds-sec">
						<div class="row">
							<?php getblogridposts("homestay_info");?>
							<!--bloggrids-->
						</div>
					</div>
				</div>
				<!--//left-->
				<!--right-->
				<aside class="col-lg-4 agileits-w3ls-right-blog-con text-right">
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
											<h4>recent homestay</h4>
											<?php getolderposts("homestay_info");?>
											<!--olderpostsendhere-->
										</div>
									</div>
								</aside>
								<!--//right-->
							</div>
						</div>
					</section>
					<!--//main-->
					<!--/middle-->
					<section class="middle-sec-agileinfo-w3ls">
						<div class="container">
							<div class="row inner-sec">
								<div class="col-md-4 news-left">
									
										<!--get latest four-->
										<?php getfour("homestay_info");?>
									
								</div>
								<div id="demo1_main_image" class="col-md-8  news-right"></div>
								<div class="clearfix"> </div>
							</div>
						</div>

					</section>
					<!--//middle-->
					<!---->
					<section class="main-content-w3layouts-agileits">
						<div class="container">
							<div class="row">
								<!--left-->
								<div class="col-lg-8 left-blog-info-w3layouts-agileits text-left">
									<?php getonelatest("homestay_info");?>
								</div>
								<!--//left-->
								<!--right-->
								<aside class="col-lg-4 agileits-w3ls-right-blog-con text-left">
									<div class="tech-btm">
										<h4>Featured Homestay</h4>

										<?php geteditorschoice("featured_homestay"); ?>

									</div>

								</aside>
								<!--//right-->
							</div>
						</div>
					</section>
					<!--//main-->
					<?php include("footer.php");?>
					<!---->
					<!-- js -->
					<script src="js/jquery-2.2.3.min.js"></script>
					<!-- //js -->
					<!-- desoslide-JavaScript -->
					<script src="js/jquery.desoslide.js"></script>
					<script>
						$('#demo1_thumbs').desoSlide({
							main: {
								container: '#demo1_main_image',
								cssClass: 'img-responsive'
							},
							effect: 'sideFade',
							caption: true
						});
					</script>

					<!-- requried-jsfiles-for owl -->
					<script>
						$(window).load(function () {
							$("#flexiselDemo1").flexisel({
								visibleItems: 3,
								animationSpeed: 1000,
								autoPlay: true,
								autoPlaySpeed: 3000,
								pauseOnHover: true,
								enableResponsiveBreakpoints: true,
								responsiveBreakpoints: {
									portrait: {
										changePoint: 480,
										visibleItems: 1
									},
									landscape: {
										changePoint: 640,
										visibleItems: 2
									},
									tablet: {
										changePoint: 768,
										visibleItems: 3
									}
								}
							});

						});
					</script>
					<script>
						$(window).load(function () {
							$("#flexiselDemo2").flexisel({
								visibleItems: 3,
								animationSpeed: 1000,
								autoPlay: true,
								autoPlaySpeed: 3000,
								pauseOnHover: true,
								enableResponsiveBreakpoints: true,
								responsiveBreakpoints: {
									portrait: {
										changePoint: 480,
										visibleItems: 1
									},
									landscape: {
										changePoint: 640,
										visibleItems: 2
									},
									tablet: {
										changePoint: 768,
										visibleItems: 3
									}
								}
							});

						});
					</script>
					<script src="js/jquery.flexisel.js"></script>
					<!-- //password-script -->
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

							var defaults = {
							  			containerID: 'toTop', // fading element id
										containerHoverID: 'toTopHover', // fading element hover id
										scrollSpeed: 1200,
										easingType: 'linear'
									};


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
