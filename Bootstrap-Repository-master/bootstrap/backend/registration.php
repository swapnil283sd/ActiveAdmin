<?php
	header('Content-Type:application/json');
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		if(!empty($_POST)){
			include_once 'dbconnect.php';	  
			 $cust_username=$_POST['cust_username'];
			 $cust_password=$_POST['cust_password'];
			 $cust_name=$_POST['cust_name'];
			 $cust_gender=$_POST['cust_gender'];
			 $cust_imageurl=$_POST['cust_imageurl'];
			 $cust_address=$_POST['cust_address'];
			 $cust_doa=$_POST['cust_doa'];
			 $cust_dob=$_POST['cust_dob'];
			$cust_pincode=$_POST['cust_pincode'];
			 $cust_mobileno=$_POST['cust_mobileno'];
			 $otp=generateOTP();
			include "md.php";
			$cust_token=md5(getToken(20));
			 date_default_timezone_set("Asia/Kolkata");
			 $date=date("y-m-d");
			 $sqle = "SELECT * FROM customer where cust_username='$cust_username' or cust_token='$cust_token'";
			 $resulte = mysqli_query($conn, $sqle);
			if (mysqli_num_rows($resulte) > 0) {
			    // output data of each row
			    while($row = mysqli_fetch_assoc($resulte)) {
			    $data=array('success' => 0,'message' =>'Username Already registered');
			    echo json_encode($data);
			    }
			} 
			else {
			    
			  $sql="INSERT INTO customer (`cust_username`,`cust_password`,`cust_name`,`otp`,`cust_imageurl`,`cust_address`,`cust_doa`,`cust_dob`,`cust_pincode`,`cust_mobileno`,`cust_token`)VALUES('".$cust_username."','".$cust_password."','".$cust_name."','".$otp."','".$cust_imageurl."','".$cust_address."','".$cust_doa."','".$cust_dob."','".$cust_pincode."','".$cust_mobileno."','".$cust_token."')";
			 
			 $result=mysqli_query($conn,$sql);
			 if($result){
			 		
			 		$message = rawurlencode("Hello $cust_username . Your OTP for GreenLeaf Food Order Application : $otp."); 
			include_once 'sendsms.php';
                        
                        $sqlid = "SELECT * FROM customer WHERE cust_token='$cust_token'";
			$resultid = $conn->query($sqlid);			 		
                        $row = $resultid->fetch_assoc();

				$array=array('success'=>1,'message'=>'Successfully Registerd','otp'=>$otp,'customerid'=>$row['cust_srno']);
			 	echo json_encode($array);
			 	
			 }
			 else{
			 	$array=array('success'=>0,'message'=>'Something Went Wrong Try Again..');
			 	echo json_encode($array);
			 }
			 
			 
			
			 
		}	 
			 
		}
		else{
			$array=array('sucess'=>0,'message'=>'No inputs Found');
			echo json_encode($array);
		}
	}
	else{
		$array=array('sucess'=>0,'message'=>'Send Request Using Only POST method');
		echo json_encode($array);
	}
	
	
	function generateOTP($digits = 4){
    $i = 0; //counter
    $pin = ""; 
    while($i < $digits){
        $pin .= mt_rand(0, 9);
        $i++;
    }
    return $pin;
}
?>
