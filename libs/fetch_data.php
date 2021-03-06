<?php


function gettagline($table){
	require("database/db_connect.php");
	$sql="SELECT * FROM $table ";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no news alert
		if ($rowcount==0) {
      		# code...
			echo 'No Tagline!!';
		}
      	//if there are rows available display all the results
		foreach ($result as $titles => $tagline) {
      	# code...
			echo ''.$tagline['tagline'].'';
		}
	}

	mysqli_close($con);
}

function getaddress($id){
	require("database/db_connect.php");
	$sql="SELECT address FROM homestay_info where id = $id ";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no news alert
		if ($rowcount==0) {
      		# code...
			echo 'No address found!!';
		}
      	//if there are rows available display all the results
		foreach ($result as $add ) {
      	# code...
			echo ''.$add['address'].'';
		}
	}

	mysqli_close($con);
}
function getphonenum($id){
	require("database/db_connect.php");
	$sql="SELECT * FROM user where homestay_id = $id";
	if ($result=mysqli_query($con,$sql))
	{
		foreach ($result as $phone ) {

			echo ''.$phone['phone'].'';
						}
					}

	mysqli_close($con);
}


function getemail($id){
	require("database/db_connect.php");
	$sql="SELECT owner_name FROM homestay_info where id = $id ";
	if ($result=mysqli_query($con,$sql))
	{
		$rowcount=mysqli_num_rows($result);
		foreach ($result as $owner_name ) {
			// echo ''.$owner_name['owner_name'].''.$id;

			$sql="SELECT email FROM user where username ='".$owner_name['owner_name']." ';";
			if ($result=mysqli_query($con,$sql))
			{
				$rowcount=mysqli_num_rows($result);
				foreach ($result as $owner ) {
      	# code...
					return $owner['email'];
				}
			}
		}
	}

	mysqli_close($con);
}

function getreservation($id){
	require("database/db_connect.php");
	$sql="SELECT * FROM room where h_id= $id;";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no news alert
		if ($rowcount==0) {
      		# code...
			echo 'No rooms found!';
		}
      	//if there are rows available display all the results
		foreach ($result as $titles => $tagline) {
      	# code...
			echo '';
		}
	}

	mysqli_close($con);
}

function getlocation($id){
	require("database/db_connect.php");
	$sql="SELECT * FROM homestay_info where id ='$id';";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no news alert
		if ($rowcount==0) {
      		# code...
			echo 'sorry!!! :( No location found.';
		}
      	//if there are rows available display all the results
		foreach ($result as $location ) {
      	# code...
			echo ''.$location['location'].'';
		}
	}

	mysqli_close($con);
}

function getvideo($id){
	require("database/db_connect.php");
	$sql="SELECT * FROM homestay_info where id ='$id';";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no news alert
		if ($rowcount==0) {
      		# code...
			echo 'sorry!!! :( No video link found.';
		}
      	//if there are rows available display all the results
		foreach ($result as $video ) {
      	# code...
			echo ''.$video['video_link'].'';
		}
	}

	mysqli_close($con);
}

function getfeatures($id){
	require("database/db_connect.php");
	$sql="SELECT features FROM homestay_info where id ='$id';";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no news alert
		if ($rowcount==0) {
      		# code...
			echo 'sorry!!! :( No features found.';
		} 
		// if data need from features table
		foreach ($result as $features ) {
			echo '<p>'.$features["features"].'</p>';
		}	
	}
	mysqli_close($con);

}

function getallowed($id){
	require("database/db_connect.php");
	$sql="SELECT include FROM allowed where h_id ='$id';";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no news alert
		if ($rowcount==0) {
      		# code...
			echo 'sorry!!! :( No features found.';
		} 

		foreach ($result as $features ) {
			echo '<p><i class="fa fa-check" aria-hidden="true"></i>'.$features["include"].'</p>';
		}
		mysqli_close($con);
	}
}
function geticon($table){
	require("database/db_connect.php");
	$sql="SELECT * FROM $table ";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no icon alert
		if ($rowcount==0) {
      		# code...
			echo 'NoIcon';
		}
      	//if there are rows available display all the results
		foreach ($result as $webicon => $icon) {
      	# code...
			echo ''.$icon['icon'].'';
		}
	}

	mysqli_close($con);
}
function getstars($id){
	require("database/db_connect.php");
	$sql="SELECT * FROM $table ";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no icon alert
		if ($rowcount==0) {
      		# code...
			echo 'NoIcon';
		}
      	//if there are rows available display all the results
		foreach ($result as $webicon => $icon) {
      	# code...
			echo ''.$icon['icon'].'';
		}
	}

	mysqli_close($con);
}
function getprice($id,$type){
	require("database/db_connect.php");
	$sql="SELECT price FROM room where h_id='$id' and type='$type'";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no icon alert
		if ($rowcount==0) {
      		# code...
			echo 'N/A';
			return 1;
		}
      	//if there are rows available display all the results
		foreach ($result as $price) {
      	# code...
			echo ''.$price['price'].'';
			break;

		}
	}
	else {mysqli_error($con);}

	mysqli_close($con);
}

function checkPrice($id,$type){
	require("database/db_connect.php");
	$sql="SELECT price FROM room where h_id='$id' and type='$type'";
	if ($result=mysqli_query($con,$sql))
	{
		$rowcount=mysqli_num_rows($result);
		if ($rowcount==0) {
			return 0;
		}else{
			return 1;
		}
	}
	else {mysqli_error($con);}

	mysqli_close($con);

}
//to edit
function getstarreview($id){
	require("database/db_connect.php");
	$sql="SELECT user.pic, user.username,comment.star,comment.title,comment.text,comment.homestay_id
	FROM user
	right JOIN comment ON user.id=comment.user_id where comment.homestay_id=$id;";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no icon alert
		if ($rowcount==0) {
      		# code...
			echo 'NoIcon';
		}
      	//if there are rows available display all the results
		foreach ($result as $rev) {
      	# code...
			echo '	
			<li>
			<div class="w3layouts_work_grid_left col-md-4">
			<img src="homestay/images/5.jpg" alt=" " class="img-responsive" />
			<div class="w3layouts_work_grid_left_pos">
			<img src="homestay/images/'.$rev['pic'].'" alt=" " class="img-responsive" />
			</div>
			</div>
			<div class="w3layouts_work_grid_right col-md-6" style="padding-top:0;margin-top:0">
			<h4>'. $rev['title'].'<br/>';

			for ($i=1;$i<$rev['star'];$i++){
				echo '<i class="fa fa-star checked" aria-hidden="true"></i>';
			}

			if($rev['star']!=5){
				$a= 5-$rev['star'];
				for ($i=1;$i>$a;$i++){
					echo '<i class="fa fa-star" aria-hidden="true"></i>';
				}
			}


			echo '
			</h4>
			<p>'.$rev['text'].'</p>
			<h5>'.$rev['username'].'</h5>
			</div>
			<div class="clearfix"> </div>
			</li>';
		}
	}
	else{
		echo mysqli_error($con);
	}

	mysqli_close($con);
}

function getjavascripts($table){
	require("database/db_connect.php");
	$sql="SELECT * FROM $table ";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no script alert
		if ($rowcount==0) {
      		# code...
			echo 'No script';
		}
      	//if there are rows available display all the results
		foreach ($result as $jsscripts => $js) {
      	# code...
			echo ''.$js['javascript'].'';
		}
	}

	mysqli_close($con);
}
function getsharingscript($table){
	require("database/db_connect.php");
	$sql="SELECT * FROM $table ";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no script alert
		if ($rowcount==0) {
      		# code...
			echo 'No script';
		}
      	//if there are rows available display all the results
		foreach ($result as $sharingscript => $sharing) {
      	# code...
			echo ''.$sharing['sharing_script'].'';
		}
	}

	mysqli_close($con);
}
function gethomestayname($id,$table){
	require("database/db_connect.php");
	$sql="SELECT * FROM $table";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no script alert
		if ($rowcount==0) {
      		# code...
			echo 'Homestay Name Not Found';
		}
		foreach ($result as $t_data) {
      	# code...
			if ($t_data['id']==$id){
				echo ''. $t_data['title'].'';
			}
		}

	}

	mysqli_close($con);
}
function gethostdetails($id,$table){
	require("database/db_connect.php");
	$sql="SELECT * FROM $table where homestay_id=$id";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no script alert
		if ($rowcount==0) {
      		# code...
			echo 'host details Not Found';
		}
		foreach ($result as $t_data) {



      	# code...
			// if ($t_data['id']==$id){
				echo '<center><p align="justify">'. $t_data['about'].'</p></center><br><br>';


				echo '<center><img src="homestay/admin/profile_pic/'.$t_data["pic"].'"  alt="about the host" height="400px" width="100%">		</center>';

				// $sql="SELECT * FROM user where owner_id=".$t_data['id'].";";
				// if ($result=mysqli_query($con,$sql))
				// {
    //   	//count number of rows in query result
				// 	$rowcount=mysqli_num_rows($result);
    //   	//if no rows returned show no script alert
				// 	if ($rowcount==0) {
    //   		# code...
				// 		echo 'owner image Not Found';
				// 	}
				// 	foreach ($result as $img) {


				// 		echo '<img src="homestay/images/'.$img["pic"].'"  alt="about the host" height="400px">';
				// 	}
				// }
				// else{
				// 	echo mysqli_error($con);
				// }

			}

			
		// }
	}
	mysqli_close($con);
}

function getrules($id){
	require("database/db_connect.php");
	$sql="SELECT * FROM homestay_info where id='$id'";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no script alert
		if ($rowcount==0) {
      		# code...
			echo '<p>Rules Not Found</p>';
		}
		foreach ($result as $t_data) {
      	# code...
			if ($t_data['id']==$id){
				echo '</p> <p font-size:150px><b>'.$t_data["rules"].'</p></b>';
			}
		}

	}

	mysqli_close($con);
}

//  

function getfamilyname($id,$table){
	require("database/db_connect.php");
	$sql="SELECT * FROM $table where H_id=$id";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no script alert
		if ($rowcount==0) {
      		# code....
      		#no  family record found.
			echo "no  family record found.";
		}
		$a=1;
      	//if there are rows available display all the results
		foreach ($result as $info) {
      	# code...
			echo '<div class="tab'.$a.'">
			<div class="col-md-6 team-img-w3-agile">
			</div><h4>';
			$a++;
			echo $info['name'].'</h4><span>'.$info['relation'].'</span><p>'.$info['about'].'</p>';
			echo '<div class="social-bnr-agileits footer-icons-agileinfo">
			<ul class="social-icons3">
			<li><a href="#" class="fa fa-facebook icon-border facebook"> </a></li>
			<li><a href="#" class="fa fa-twitter icon-border twitter"> </a></li>
			<li><a href="#" class="fa fa-google-plus icon-border googleplus"> </a></li> 
			<li><a href="#" class="fa fa-rss icon-border rss"> </a></li>
			</ul>
			</div>
			</div>
			<div class="clearfix">
			</div>';
		}
	}
//$sql="SELECT name FROM $table where H_id='$id' and relation='$name';";
// if ($result=mysqli_query($con,$sql))
// 	{

// 		$row = mysqli_fetch_assoc($result);
// 		echo $row['name'];


// 	}
	mysqli_close($con);
}

function getcommentsscript($table){
	require("database/db_connect.php");
	$sql="SELECT * FROM $table ";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no script alert
		if ($rowcount==0) {
      		# code...
			echo 'No script';
		}
      	//if there are rows available display all the results
		foreach ($result as $commentsscript => $csript) {
      	# code...
			echo ''.$csript['comments_script'].'';
		}
	}

	mysqli_close($con);
}
function getshortdescription($table){
	require("database/db_connect.php");
	$sql="SELECT * FROM $table ";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no news alert
		if ($rowcount==0) {
      		# code...
			echo 'No Description!!';
		}
      	//if there are rows available display all the results
		foreach ($result as $titles => $sdc) {
      	# code...
			echo ''.$sdc['short_description'].'';
		}
	}

	mysqli_close($con);
}
function getcontacts($table,$num){
	require("database/db_connect.php");
	$sql="SELECT * FROM $table ";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no news alert
		if ($rowcount==0) {
      		# code...
			echo 'No Description!!';
		}
      	//if there are rows available display all the results
		foreach ($result as $titles => $contacts) {
      	# code...num
			if ($num==1) {
				# code...
				echo ''.$contacts['address'].'';
			}
			elseif ($num==2) {
				# code...
				echo ''.$contacts['email'].'';
			}
			elseif ($num==3) {
				# code...
				echo ''.$contacts['phone'].'';
			}
			elseif ($num==4) {
				# code...
				echo ''.$contacts['googlemap'].'';
			}

		}
	}

	mysqli_close($con);
}
function getdetaileddescription($table){
	require("database/db_connect.php");
	$sql="SELECT * FROM $table ";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no news alert
		if ($rowcount==0) {
      		# code...
			echo 'No Description!!';
		}
      	//if there are rows available display all the results
		foreach ($result as $titles => $sdc) {
      	# code...
			echo ''.$sdc['detailed_description'].'';
		}
	}

	mysqli_close($con);
}
function countcategories(){
	require("database/db_connect.php");
	$sql="SELECT * FROM location LIMIT 10";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no news alert
		if ($rowcount==0) {
      		# code...
			echo 'No Location!!';
		}
      	//if there are rows available display all the results
		foreach ($result as $categoriescount => $categorydata) {
				#count how many times each category appears in blogs
			$categoryid=$categorydata['id'];
			$sql="SELECT * FROM homestay_info WHERE category='$categoryid'";
			if ($result=mysqli_query($con,$sql)) {
					# code...
				$rowcountcategory=mysqli_num_rows($result);
				$getcatcount=$rowcountcategory;
			}
					# code...show data
			echo '<a href="category.php?id='.$categorydata['id'].'"><li class="list-group-item d-flex justify-content-between align-items-center">'.$categorydata['name'].'
			<span class="badge badge-success badge-pill">'.$rowcountcategory.'</span>
			</li></a>';
		}
	}


	/*	
		}
      	//if there are rows available display all the results
		foreach ($result as $blog_categories => $category) {
      	# code...
			echo '<a class="dropdown-item" href="category.php?id='.$category['id'].'">'.$category['name'].'</a>
			<div class="dropdown-divider"></div>';
		}
	}
	*/

	mysqli_close($con);
}
function getbannertext($table,$position){
	require("database/db_connect.php");
	$sql="SELECT * FROM $table ";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no news alert
		if ($rowcount==0) {
      		# code...
			echo 'Hello World!!';
		}
      	//if there are rows available display all the results
		foreach ($result as $titles => $bannertext) {
      	# code...
			if ($position==1) {
					# code...
				echo ''.$bannertext['bannertext1'].'';
			}
			elseif ($position==2) {
					# code...
				echo ''.$bannertext['bannertext2'].'';
			}
			elseif ($position==3) {
					# code...
				echo ''.$bannertext['bannertext3'].'';
			}
			elseif ($position==4) {
					# code...
				echo ''.$bannertext['bannertext4'].'';
			}
		}
	}

	mysqli_close($con);
}
function getwebname($table){
	require("database/db_connect.php");
	$sql="SELECT * FROM $table ";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no news alert
		if ($rowcount==0) {
      		# code...
			echo 'No Name!!';
		}
      	//if there are rows available display all the results
		foreach ($result as $titles => $blogname) {
      	# code...
			echo ''.$blogname['website_name'].'';
		}
	}

	mysqli_close($con);
}
function getkeywords($table){
	require("database/db_connect.php");
	$sql="SELECT * FROM $table ";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no news alert
		if ($rowcount==0) {
      		# code...
			echo 'Nothing';
		}
      	//if there are rows available display all the results
		foreach ($result as $titles => $keywords) {
      	# code...
			echo ''.$keywords['keywords'].'';
		}
	}

	mysqli_close($con);
}
function getlinks($table,$platform){
	require("database/db_connect.php");
	$sql="SELECT * FROM $table ";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no news alert
		if ($rowcount==0) {
      		# code...
			echo '#';
		}
      	//if there are rows available display all the results
		foreach ($result as $link => $site) {
      	# code...
			if ($platform=="facebook") {
					# code...
				echo ''.$site['facebook'].'';
			}
			elseif ($platform=="twitter") {
					# code...
				echo ''.$site['twitter'].'';
			}
			elseif ($platform=="googleplus") {
					# code...
				echo ''.$site['googleplus'].'';
			}
			elseif ($platform=="pinterest") {
					# code...
				echo ''.$site['pinterest'].'';
			}
			elseif ($platform=="dribble") {
					# code...
				echo ''.$site['dribble'].'';
			}

		}
	}

	mysqli_close($con);
}
function getcategoriesmenu($table)
{
	require("database/db_connect.php");
	$sql="SELECT * FROM $table ";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no categories alert
		if ($rowcount==0) {
      		# code...
			echo 'No Categories';
		}
      	//if there are rows available display all the results
		foreach ($result as $blog_categories => $category) {
      	# code...
			echo '<a class="dropdown-item" href="category.php?id='.$category['id'].'">'.$category['name'].'</a>
			<div class="dropdown-divider"></div>';
		}
	}

	mysqli_close($con);
}
function getbottomsliderposts($table){
	require("database/db_connect.php");
	$sql="SELECT * FROM $table WHERE posted='publish' ORDER BY id DESC LIMIT 3";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no news alert
		if ($rowcount==0) {
      		# code...
			echo 'No posts to fetch';
		}
      	//if there are rows available display all the results
		else {
			foreach ($result as $sliderposts => $slideritem) {
      	# code...fetch actual category from categories table

				echo '<li>
				<div class="blog-item">
				<img src="homestay/admin/profile_pic/'.$slideritem['photo'].'" alt="homestay pic" class="img-fluid" style="width:450px;height:350px"/>
				<button type="button" class="btn btn-primary play">
				<a href="single.php?id='.$slideritem['id'].'" style="text-decoration:none;color:white"><i class="fas fa-eye"></i></a>
				</button>
				<div class="floods-text">
				<h3>'.$slideritem['title'].'
				</label>
				<i>'.$slideritem['owner_name'].'</i>
				</span>
				</h3>

				</div>
				</div>
				</li>';
			}
		}
	}

	mysqli_close($con);
}
function getblogridposts($table){
	require("database/db_connect.php");
	$sql="SELECT * FROM $table WHERE posted='publish' ORDER BY id ASC LIMIT 8";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no news alert
		if ($rowcount==0) {
      		# code...
			echo 'No Posts To Fetch';
		}
      	//if there are rows available display all the results
		foreach ($result as $bloggrid => $griditem) {
      	# code...
			echo '<div class="col-md-6 blog-grid-top">
			<div class="b-grid-top">
			<div class="blog_info_left_grid">
			<a href="single.php?id='.$griditem['id'].'">
			<img src="homestay/admin/profile_pic/'.$griditem['photo'].'" class="img-fluid" alt="homestay Nepal pic" style="width:350px;height:250px">
			</a>
			</div>
			<h3>
			<a href="single.php?id='.$griditem['id'].'">'.$griditem['title'].'</a>
			</h3>
			</div>
			<ul class="blog-icons">
			<li>
			<a href="#">
			<i class="far fa-clock"></i>'.$griditem['date'].'</a>
			</li>
			<li class="mx-2">
			<a href="#">
			<i class="far fa-user"></i> '.$griditem['owner_name'].'</a>
			</li>
			<li>
			<a href="#">
			<i class="fas fa-tags"></i>'.$griditem['tags'].'</a>
			</li>

			</ul>
			</div>';
		}
	}

	mysqli_close($con);

}
function getolderposts($table){
	require("database/db_connect.php");
	$sql="SELECT * FROM $table WHERE posted='publish' ORDER BY id DESC LIMIT 8";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no posts alert
		if ($rowcount==0) {
      		# code...
			echo 'No Posts To Fetch';
		}
      	//if there are rows available display all the results
		foreach ($result as $olderposts => $op) {
      	# code...
			echo '<div class="blog-grids row mb-3">
			<div class="col-md-5 blog-grid-left">
			<a href="single.php?id='.$op['id'].'">
			<img src="homestay/admin/profile_pic/'.$op['photo'].'" class="img-fluid" alt="homestay Nepal pic">
			</a>
			</div>
			<div class="col-md-7 blog-grid-right">

			<h5>
			<a href="single.php?id='.$op['id'].'">'.$op['title'].'</a>
			</h5>
			<div class="sub-meta">
			<span>
			<i class="far fa-clock"></i> '.$op['date'].'</span>
			</div>
			</div>

			</div>';
		}
	}

	mysqli_close($con);
}
function faq($table){
	require("database/db_connect.php");
	$sql="SELECT * FROM $table ORDER BY id LIMIT 5";
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
		echo '<ul>';
		foreach ($result as $faq ) {
      	# code...
			echo '
			<li>
			<a href="faq/index.php">
			<h4 style="height:40px; color:lime;">'.$faq['question'].'</h4>		
			</a>
			</li>
			';
		} echo '</ul>';
	}

	mysqli_close($con);
}



function getmostpopular($table){
	require("database/db_connect.php");

	$sql="SELECT * FROM page_hits ORDER BY count DESC LIMIT 1";
	if ($result1=mysqli_query($con,$sql))
	{
      	//if there are rows available display all the results
		foreach ($result1 as $pagehits => $hits) {
      	# code...get actual blog from blogs db
			$storepage=$hits['page'];
			$sql="SELECT * FROM homestay_info WHERE title='$storepage'";
			if ($result=mysqli_query($con,$sql)) {
				# code...
      	//if there are rows available display all the results
		foreach ($result as $onelatest => $onedata) {
      	# code...
			echo '<div class="blog-grid-top">
			<div class="b-grid-top">
			<div class="blog_info_left_grid">
			<a href="single.php?id='.$onedata['id'].'">
			<img src="homestay/admin/profile_pic/'.$onedata['photo'].'" class="img-fluid" alt="homestay Nepal pic" style="width:900px;height:500px">
			</a>
			</div>
			<div class="blog-info-middle">
			<ul>
			<li>
			<a href="#">
			<i class="far fa-calendar-alt"></i> '.$onedata['date'].'</a>
			</li>
			<li class="mx-2">
			<a href="#">
			<i class="far fa-check"></i> '.$onedata['tags'].'</a>
			</li>
			<li>
			<a href="#">
			<i class="far fa-user"></i> '.$onedata['owner_name'].'</a>
			</li>

			</ul>
			</div>
			</div>

			<h3>
			<a href="single.php?id='.$onedata['id'].'">'.$onedata['title'].'</a>
			</h3>
			<a href="single.php?id='.$onedata['id'].'" class="btn btn-primary read-m">Read More</a>
			</div>';
		}
	}
}
}
	mysqli_close($con);
}
function geteditorschoice($table){
	require("database/db_connect.php");
	$sql="SELECT * FROM $table ORDER BY id DESC LIMIT 8";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no posts alert
		if ($rowcount==0) {
      		# code...
			echo 'No Posts To Fetch';
		}
      	//if there are rows available display all the results
		foreach ($result as $edschoice => $choice) {
			#get actual blog post data
			$postid=$choice['homestay'];
			$sql="SELECT * FROM homestay_info WHERE id='$postid'";
			if ($result=mysqli_query($con,$sql)) {
				# code...
				foreach ($result as $posts => $postdata) {
					# code...display actual posts
					echo '<div class="blog-grids row mb-3">
					<div class="col-md-5 blog-grid-left">
					<a href="single.php?id='.$postdata['id'].'">
					<img src="homestay/admin/profile_pic/'.$postdata['photo'].'" class="img-fluid" alt="homestay Nepal pic">
					</a>
					</div>
					<div class="col-md-7 blog-grid-right">

					<h5>
					<a href="single.php?id='.$postdata['id'].'"> '.$postdata['title'].'</a>
					</h5>
					<div class="sub-meta">
					<span>
					<i class="far fa-clock"></i> '.$postdata['date'].'</span>
					</div>
					</div>

					</div>';
				}
			}
      	# code...
		}
	}

	mysqli_close($con);
}
function getcategoryblogs($table,$id){
	require("database/db_connect.php");
	$sql="SELECT * FROM $table WHERE category='$id' ORDER BY id DESC LIMIT 10";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no news alert
		if ($rowcount==0) {
      		# code...
			echo 'No homestay found';
		}
      	//if there are rows available display all the results
		foreach ($result as $categories => $cdata) {
      	# code...
			echo '<div class="col-md-6 card">
			<a href="single.php?id='.$cdata['id'].'">
			<img src="homestay/admin/profile_pic/'.$cdata['photo'].'" class="card-img-top img-fluid" alt="homestay Nepal pic" style="width:480px;height:300px">
			</a>
			<div class="card-body">
			<ul class="blog-icons my-4">
			<li>
			<a href="#">
			<i class="far fa-calendar-alt"></i> '.$cdata['date'].'</a>
			</li>
			<li class="mx-2">
			<a href="#">
			<i class="far fa-user"></i> '.$cdata['owner_name'].'</a>
			</li>
			<li>
			<a href="#">
			<i class="fas fa-tags"></i> '.$cdata['tags'].'</a>
			</li>

			</ul>
			<h5 class="card-title ">
			<a href="single.php?id='.$cdata['id'].'">'.$cdata['title'].'</a>
			</h5>
			<a href="single.php?id='.$cdata['id'].'" class="btn btn-primary read-m">Read More</a>
			</div>
			</div>';
		}
	}

	mysqli_close($con);
}
function getpopularposts($table){
	require("database/db_connect.php");
	#get most viewed 3 pages from pagehits
	$sql="SELECT * FROM $table ORDER BY count DESC LIMIT 3";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no news alert
		if ($rowcount==0) {
      		# code...
			echo 'No Pots To Fetch';
		}
      	//if there are rows available display all the results
		foreach ($result as $pagehits => $hits) {
      	# code...get actual blog from blogs db
			$storepage=$hits['page'];
			$sql="SELECT * FROM homestay_info WHERE title='$storepage'";
			if ($result=mysqli_query($con,$sql)) {
				# code...
				foreach ($result as $allblogs => $specificblog) {
					# code...display the results
					echo '<div class="blog-grids row mb-3">
					<div class="col-md-5 blog-grid-left">
					<a href="single.php?id='.$specificblog['id'].'">
					<img src="homestay/admin/profile_pic/'.$specificblog['photo'].'" class="img-fluid" alt="homestay Nepal pic">
					</a>
					</div>
					<div class="col-md-7 blog-grid-right">


					<a href="single.php?id='.$specificblog['id'].'"><h4 style="color:white;">'.$specificblog['title'].'</h4> </a>

					<div class="sub-meta">
					<span>
					<i class="far fa-clock"></i> '.$specificblog['date'].'</span>
					</div>
					</div>

					</div>';
				}
			}
		}
	}

	mysqli_close($con);

}


?>
