<?php
	header('Content-Type:application/json');
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		if(!empty($_POST)){
			
		include_once 'dbconnect.php';
		$emp_username=$_POST['emp_username'];
		$emp_password=$_POST['emp_password'];
		
		$sql = "SELECT * FROM employee where name='$emp_username' and password='$emp_password'";
		$result = mysqli_query($conn, $sql);
		
		if (mysqli_num_rows($result) > 0) {
		    // output data of each row
		    while($row = mysqli_fetch_assoc($result)) {
		    $data=array('success' => true,'message' =>'Login Successfully');
		    echo json_encode($data);
		    }
		} 
		else {
		    $data=array('success' => false, 'message' =>'Login Failed try Again');
		    echo json_encode($data);
		}
					
		}
		else{
			$array=array('success'=>false,'message'=>'No inputs Found');
			echo json_encode($array);
		}
		
	}
	else{
		$array=array('success'=>false,'message'=>'Send Request Using Only POST method');
		echo json_encode($array);
	}
?>