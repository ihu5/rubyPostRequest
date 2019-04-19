<?PHP
// set the default timezone to use. Available since PHP 5.1
date_default_timezone_set('Asia/Riyadh');

$dateTime = date("Y-m-d H:i:s");
$today = date("Y-m-d");
$std_civil = null;
$cardID = null;


 if(!empty($_POST['cardID'])){
	 
	 

	 if($_POST['cardID'] == 1){
		//echo "CARD ID: ".$_POST['cardID'];
		echo "Name: Hussain"."\n";
	 }else{
		//echo "CARD ID: ".$_POST['cardID'];
		echo "Name: Unknown user"."\n";
	 }

	 echo "\n";
		
		 
		 
}	
		
		
		
 

  
   

 ?>
