<?php require("libs/fetch_data.php");
// blog =homestay_info
// blog_cat=location
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title><?php getwebname("titles"); echo"|"; gettagline("titles");?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<link id="browser_favicon" rel="shortcut icon" href="icon/<?php geticon("titles"); ?>">
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

</head>

<body>

<body>
	<!--Header-->
	<?php include("header.php");?> 
	<div class="header_top" id="home">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
   <button class="navbar-toggler navbar-toggler-right mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
   aria-expanded="false" aria-label="Toggle navigation">
   <span class="navbar-toggler-icon"></span>
 </button>


 <div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav mr-auto">
   <li class="nav-item ">
    <a class="nav-link" href="index.php">Home
     <span class="sr-only">(current)</span>
   </a>
 </li>
 <li class="nav-item ">
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
							<li class="nav-item active">
								<a class="nav-link " href="terms.php">terms and conditions</a>
							</li>

						</ul>
						
           <form action="search.php" method="post" class="form-inline my-2 my-lg-0 header-search" name="form" >

            <input class="form-control mr-sm-2" type="search" placeholder="Search here..." required="yes" type="text" name="search[keyword]">
            <button class="btn btn1 my-2 my-sm-0" type="submit" name="submit"><i class="fas fa-search"></i></button>
          </form>



        </div>
      </nav>

    </div>

<h2><center>Welcome to our homestay management system</center></h2>
	<br><p>These terms and conditions outline the rules and regulations for the use of homestay's Website.</p> <br /> 
	<span style="text-transform: capitalize;"> homestay</span> is located at:<br /> 
	<address>Pokhara Pokhara <br />33700 , Nepal<br />
	</address>
	<p>By accessing this website we assume you accept these terms and conditions in full. Do not continue to use homestay's website 
	if you do not accept all of the terms and conditions stated on this page.</p>
	<p>The following terminology applies to these Terms and Conditions, Privacy Statement and Disclaimer Notice
	and any or all Agreements: "Client", "You" and "Your" refers to you, the person accessing this website
	and accepting the Company's terms and conditions. "The Company", "Ourselves", "We", "Our" and "Us", refers
	to our Company. "Party", "Parties", or "Us", refers to both the Client and ourselves, or either the Client
	or ourselves. All terms refer to the offer, acceptance and consideration of payment necessary to undertake
	the process of our assistance to the Client in the most appropriate manner, whether by formal meetings
	of a fixed duration, or any other means, for the express purpose of meeting the Client's needs in respect
	of provision of the Company's stated services/products, in accordance with and subject to, prevailing law
	of Nepal. Any use of the above terminology or other words in the singular, plural,
	capitalisation and/or he/she or they, are taken as interchangeable and therefore as referring to same.</p><h2>Cookies</h2>
	<p>We employ the use of cookies. By using homestay's website you consent to the use of cookies 
	in accordance with homestay's privacy policy.</p><p>Most of the modern day interactive web sites
	use cookies to enable us to retrieve user details for each visit. Cookies are used in some areas of our site
	to enable the functionality of this area and ease of use for those people visiting. Some of our 
	affiliate / advertising partners may also use cookies.</p><h2>License</h2>
	<p>Unless otherwise stated, homestay and/or it's licensors own the intellectual property rights for
	all material on homestay. All intellectual property rights are reserved. You may view and/or print
	pages from http://homestay.rf.gd for your own personal use subject to restrictions set in these terms and conditions.</p>
	<p>You must not:</p>
	<ol>
		<li>Republish material from http://homestay.rf.gd</li>
		<li>Sell, rent or sub-license material from http://homestay.rf.gd</li>
		<li>Reproduce, duplicate or copy material from http://homestay.rf.gd</li>
	</ol>
	<p>Redistribute content from homestay (unless content is specifically made for redistribution).</p>
<h2>User Comments</h2>
	<ol>
		<li>This Agreement shall begin on the date hereof.</li>
		<li>Certain parts of this website offer the opportunity for users to post and exchange opinions, information,
		material and data ('Comments') in areas of the website. homestay does not screen, edit, publish
		or review Comments prior to their appearance on the website and Comments do not reflect the views or
		opinions ofhomestay, its agents or affiliates. Comments reflect the view and opinion of the
		person who posts such view or opinion. To the extent permitted by applicable laws homestayshall
		not be responsible or liable for the Comments or for any loss cost, liability, damages or expenses caused
		and or suffered as a result of any use of and/or posting of and/or appearance of the Comments on this
		website.</li>
		<li>homestayreserves the right to monitor all Comments and to remove any Comments which it considers
		in its absolute discretion to be inappropriate, offensive or otherwise in breach of these Terms and Conditions.</li>
		<li>You warrant and represent that:
			<ol>
				<li>You are entitled to post the Comments on our website and have all necessary licenses and consents to
						do so;</li>
				<li>The Comments do not infringe any intellectual property right, including without limitation copyright,
					patent or trademark, or other proprietary right of any third party;</li>
				<li>The Comments do not contain any defamatory, libelous, offensive, indecent or otherwise unlawful material
					or material which is an invasion of privacy</li>
				<li>The Comments will not be used to solicit or promote business or custom or present commercial activities
					or unlawful activity.</li>
				</ol>
			</li>
		<li>You hereby grant to <strong>homestay</strong> a non-exclusive royalty-free license to use, reproduce,
		edit and authorize others to use, reproduce and edit any of your Comments in any and all forms, formats
		or media.</li>
	</ol>
<h2>Hyperlinking to our Content</h2>
	<ol>
		<li>The following organizations may link to our Web site without prior written approval:
			<ol>
			<li>Government agencies;</li>
			<li>Search engines;</li>
			<li>News organizations;</li>
			<li>Online directory distributors when they list us in the directory may link to our Web site in the same
				manner as they hyperlink to the Web sites of other listed businesses; and</li>
			<li>Systemwide Accredited Businesses except soliciting non-profit organizations, charity shopping malls,
				and charity fundraising groups which may not hyperlink to our Web site.</li>
			</ol>
		</li>
	</ol>
	<ol start="2">
		<li>These organizations may link to our home page, to publications or to other Web site information so long
			as the link: (a) is not in any way misleading; (b) does not falsely imply sponsorship, endorsement or
			approval of the linking party and its products or services; and (c) fits within the context of the linking
			party's site.
		</li>
		<li>We may consider and approve in our sole discretion other link requests from the following types of organizations:
			<ol>
				<li>commonly-known consumer and/or business information sources such as Chambers of Commerce, American
					Automobile Association, AARP and Consumers Union;</li>
				<li>dot.com community sites;</li>
				<li>associations or other groups representing charities, including charity giving sites,</li>
				<li>online directory distributors;</li>
				<li>internet portals;</li>
				<li>accounting, law and consulting firms whose primary clients are businesses; and</li>
				<li>educational institutions and trade associations.</li>
			</ol>
		</li>
	</ol>
	<p>We will approve link requests from these organizations if we determine that: (a) the link would not reflect
	unfavorably on us or our accredited businesses (for example, trade associations or other organizations
	representing inherently suspect types of business, such as work-at-home opportunities, shall not be allowed
	to link); (b)the organization does not have an unsatisfactory record with us; (c) the benefit to us from
	the visibility associated with the hyperlink outweighs the absence of <?=$companyName?>; and (d) where the
	link is in the context of general resource information or is otherwise consistent with editorial content
	in a newsletter or similar product furthering the mission of the organization.</p>

	<p>These organizations may link to our home page, to publications or to other Web site information so long as
	the link: (a) is not in any way misleading; (b) does not falsely imply sponsorship, endorsement or approval
	of the linking party and it products or services; and (c) fits within the context of the linking party's
	site.</p>

	<p>If you are among the organizations listed in paragraph 2 above and are interested in linking to our website,
	you must notify us by sending an e-mail to <a href="mailto:homestaypkr@gmail.com" title="send an email to homestaypkr@gmail.com">homestaypkr@gmail.com</a>.
	Please include your name, your organization name, contact information (such as a phone number and/or e-mail
	address) as well as the URL of your site, a list of any URLs from which you intend to link to our Web site,
	and a list of the URL(s) on our site to which you would like to link. Allow 2-3 weeks for a response.</p>

	<p>Approved organizations may hyperlink to our Web site as follows:</p>

	<ol>
		<li>By use of our corporate name; or</li>
		<li>By use of the uniform resource locator (Web address) being linked to; or</li>
		<li>By use of any other description of our Web site or material being linked to that makes sense within the
			context and format of content on the linking party's site.</li>
	</ol>
	<p>No use of homestay's logo or other artwork will be allowed for linking absent a trademark license
	agreement.</p>
<h2>Iframes</h2>
	<p>Without prior approval and express written permission, you may not create frames around our Web pages or
	use other techniques that alter in any way the visual presentation or appearance of our Web site.</p>
<h2>Reservation of Rights</h2>
	<p>We reserve the right at any time and in its sole discretion to request that you remove all links or any particular
	link to our Web site. You agree to immediately remove all links to our Web site upon such request. We also
	reserve the right to amend these terms and conditions and its linking policy at any time. By continuing
	to link to our Web site, you agree to be bound to and abide by these linking terms and conditions.</p>
<h2>Removal of links from our website</h2>
	<p>If you find any link on our Web site or any linked web site objectionable for any reason, you may contact
	us about this. We will consider requests to remove links but will have no obligation to do so or to respond
	directly to you.</p>
	<p>Whilst we endeavour to ensure that the information on this website is correct, we do not warrant its completeness
	or accuracy; nor do we commit to ensuring that the website remains available or that the material on the
	website is kept up to date.</p>
<h2>Content Liability</h2>
	<p>We shall have no responsibility or liability for any content appearing on your Web site. You agree to indemnify
	and defend us against all claims arising out of or based upon your Website. No link(s) may appear on any
	page on your Web site or within any context containing content or materials that may be interpreted as
	libelous, obscene or criminal, or which infringes, otherwise violates, or advocates the infringement or
	other violation of, any third party rights.</p>
<h2>Disclaimer</h2>
	<p>To the maximum extent permitted by applicable law, we exclude all representations, warranties and conditions relating to our website and the use of this website (including, without limitation, any warranties implied by law in respect of satisfactory quality, fitness for purpose and/or the use of reasonable care and skill). Nothing in this disclaimer will:</p>
	<ol>
	<li>limit or exclude our or your liability for death or personal injury resulting from negligence;</li>
	<li>limit or exclude our or your liability for fraud or fraudulent misrepresentation;</li>
	<li>limit any of our or your liabilities in any way that is not permitted under applicable law; or</li>
	<li>exclude any of our or your liabilities that may not be excluded under applicable law.</li>
	</ol>
	<p>The limitations and exclusions of liability set out in this Section and elsewhere in this disclaimer: (a)
	are subject to the preceding paragraph; and (b) govern all liabilities arising under the disclaimer or
	in relation to the subject matter of this disclaimer, including liabilities arising in contract, in tort
	(including negligence) and for breach of statutory duty.</p>
	<p>To the extent that the website and the information and services on the website are provided free of charge,
	we will not be liable for any loss or damage of any nature.</p>	
	<?php include("footer.php");?> 

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