<?php
header('Content-Type:application/json');
	
		
			
		include_once 'dbconnect.php';
		
		
		$sql = "SELECT * FROM `queries`";
		$result = mysqli_query($conn, $sql);
		
		if (mysqli_num_rows($result) > 0) {
		    // output data of each row
		    while($row = mysqli_fetch_assoc($result)) {
                $date_time=$row['request_date'].','.$row['request_time'];
		    $data[]=array("emp_name"=>$row['emp_name'], "admin_name"=>$row['admin_name'], "request"=>$row['request_details'], "status"=>$row['status'],"query_id"=>$row['query_id'],"date_time"=>$date_time );
		    
		    }
			 echo json_encode($data);
		
	}
?>