<?php
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
		if(!empty($_POST)) {  
			include_once 'dbconnect.php';
			
		   	 $cust_mobileno=$_POST['cust_mobileno'];
                         $cust_address=$_POST['cust_address'];
		       	$cust_srno=$_POST['cust_id'];

		   
		        $sql = "UPDATE customer SET cust_mobileno='$cust_mobileno',cust_address='$cust_address' WHERE cust_srno='$cust_srno'";
			
			$result = $conn->query($sql);

                        if ($result) {
                        $array=array('success'=>1,'message'=>'Address Updated Successfully');
			echo json_encode($array);
                         }
                        else{

                        }
			
			$conn->close();
		   
		}
	
	}

?>