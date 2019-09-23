<?php 
function faq(){
	require("../database/db_connect.php");
	$sql="SELECT * FROM faq ORDER BY id";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no posts alert
		if ($rowcount==0) {
      		# code...
			echo 'No FAQ';
		}
      	//if there are rows available display all the results
		
		foreach ($result as $faq ) {
      	# code...
			echo '
			<li class="cd-faq__item">
				<a class="cd-faq__trigger" href="#0"><span style="color: green;">'.$faq['question'].'</span></a>
				<div class="cd-faq__content">
          <div class="text-component">
            <p>'.$faq['answer'].'</p>
          </div>
				</div>
			</li>';
		} 
	}

	mysqli_close($con);
}
?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script>document.getElementsByTagName("html")[0].className += " js";</script>
  <link rel="stylesheet" href="assets/css/style.css">
  <title>FAQ | HomeStay Nepal</title>
</head>
<body>
<header class="cd-header flex flex-column flex-center" style="background-color: black;">
  <div class="text-component text-center" >
    <h1 style="color: green;font-style: italic;font-size: 65px; text-align: center;">Frequently Asked Question! </h1>
  </div>
</header>

<section class="cd-faq js-cd-faq container max-width-md margin-top-lg margin-bottom-lg">
	<ul class="cd-faq__categories">
		
	</ul> <!-- cd-faq__categories -->

	<div class="cd-faq__items">
		<ul id="basics" class="cd-faq__group">
			
			<?php  faq();
			?>


		</ul> <!-- cd-faq__group -->

	
	</div> <!-- cd-faq__items -->

	<a href="#0" class="cd-faq__close-panel text-replace">Close</a>
  
  <div class="cd-faq__overlay" aria-hidden="true"></div>
</section> <!-- cd-faq -->
<script src="assets/js/util.js"></script> <!-- util functions included in the CodyHouse framework -->
<script src="assets/js/main.js"></script> 
</body>
</html>