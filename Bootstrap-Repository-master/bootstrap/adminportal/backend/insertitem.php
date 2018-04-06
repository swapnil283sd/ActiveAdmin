<?php
	header('Content-Type:application/json');
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		if(!empty($_POST)){
			include_once 'dbconnect.php';	  
			 $foo_itemname=$_POST['foo_itemname'];
			 $foo_itemrate=$_POST['foo_itemrate'];
			 $foo_itemdescription=$_POST['foo_itemdescription'];
			 $foo_imageurl=$_POST['foo_imageurl'];
			 $foo_spicylevel=$_POST['foo_spicylevel'];
			 $foo_sweetlevel=$_POST['foo_sweetlevel'];
			 $foo_recommendation=$_POST['foo_recommendation'];
			 $foo_category=$_POST['foo_category'];
			


			include "md.php";

			 $foo_token=md5(getToken(20));

			 date_default_timezone_set("Asia/Kolkata");
			 $date=date("y-m-d");


                         $sqle = "SELECT * FROM menu where foo_itemname='$foo_itemname' ";

			 $resulte = mysqli_query($conn, $sqle);
			if (mysqli_num_rows($resulte) > 0) {
			    // output data of each row
			    while($row = mysqli_fetch_assoc($resulte)) {
			    $data=array('success' => 0,'message' =>'Food Item  Already exist');
			    echo json_encode($data);
			    }
			} else{
			
			$sqlr="INSERT INTO menu(foo_itemname,foo_itemrate,foo_description,foo_imageurl,foo_spicylevel,foo_sweetlevel,foo_recommendation,foo_category) values ('$foo_itemname','$foo_itemrate','$foo_itemdescription','$foo_imageurl','$foo_spicylevel','$foo_sweetlevel','$foo_recommendation','$foo_category')  ";
			 
			 $result=mysqli_query($conn,$sqlr);
			 if($result) {
			 
				$array=array('success'=>1,'message'=>'Successfully Registerd');
			 	echo json_encode($array);
			 	
			 }
			 else{
			 	$array=array('success'=>0,'message'=>'Something Went Wrong Try Again..');
			 	echo json_encode($array);
			 }
			
			}

}
}

?>
