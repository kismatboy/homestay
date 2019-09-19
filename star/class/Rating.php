<?php
class Rating{
	private $host  = 'localhost';
    private $user  = 'root';
    private $password   = "";
    private $database  = "homestay_nepal";    
	private $itemUsersTable = 'item_users';
	private $itemTable = 'item';	
    private $itemRatingTable = 'item_rating';
	private $dbConnect = false;
    public function __construct(){
        if(!$this->dbConnect){ 
            $conn = new mysqli($this->host, $this->user, $this->password, $this->database);
            if($conn->connect_error){
                die("Error failed to connect to MySQL: " . $conn->connect_error);
            }else{
                $this->dbConnect = $conn;
            }
        }
    }
	private function getData($sqlQuery) {
		$result = mysqli_query($this->dbConnect, $sqlQuery);
		if(!$result){
			die('Error in query: '. mysqli_error());
		}
		$data= array();
		while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
			$data[]=$row;            
		}
		return $data;
	}
	private function getNumRows($sqlQuery) {
		$result = mysqli_query($this->dbConnect, $sqlQuery);
		if(!$result){
			die('Error in query: '. mysqli_error());
		}
		$numRows = mysqli_num_rows($result);
		return $numRows;
	}	
	public function userLogin($username, $password){
		$sqlQuery = "
			SELECT * 
			FROM ".$this->itemUsersTable." 
			WHERE username='".$username."' AND password='".$password."'";
        return  $this->getData($sqlQuery);
	}		
	public function getItemList(){
		$sqlQuery = "
			SELECT * FROM ".$this->itemTable;
		return  $this->getData($sqlQuery);	
	}
	public function getItem($itemId){
		$sqlQuery = "
			SELECT * FROM ".$this->itemTable."
			WHERE id='".$itemId."'";
		return  $this->getData($sqlQuery);	
	}
	public function getItemRating($itemId){
		$sqlQuery = "
			SELECT *
			FROM ".$this->itemRatingTable." as r
			WHERE r.itemId = '".$itemId."'";
		return  $this->getData($sqlQuery);		
	}
	public function getRatingAverage($itemId){
		$itemRating = $this->getItemRating($itemId);
		$ratingNumber = 0;
		$count = 0;		
		foreach($itemRating as $itemRatingDetails){
			$ratingNumber+= $itemRatingDetails['ratingNumber'];
			$count += 1;			
		}
		$average = 0;
		if($ratingNumber && $count) {
			$average = $ratingNumber/$count;
		}
		return $average;	
	}
	public function saveRating($POST){
	$check=0;	
	$sql="select * from ".$this->itemRatingTable.";";
	$result=mysqli_query($this->dbConnect, $sql);
	foreach ($result as $email ) {
      	# code...
			if ($_POST['email']==$email['email'] and $_POST['itemId']==$email['itemId']){
				$check=1;
			}
		}

		if ($check==0){
		
				$insertRating = "INSERT INTO ".$this->itemRatingTable." (email, itemId, username, ratingNumber, title, comments, created, modified) VALUES ('".$POST['email']."','".$POST['itemId']."', '".$POST['username']."', '".$POST['rating']."', '".$POST['title']."', '".$POST["comment"]."', '".date("Y-m-d H:i:s")."', '".date("Y-m-d H:i:s")."')";
		
				mysqli_query($this->dbConnect, $insertRating);
}


		else{
			echo "<script>alert('hello');</script>";

		}
	}
}
?>