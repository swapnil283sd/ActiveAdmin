<?php
header('Content-Type:application/json');
	
		
			
		include_once 'dbconnect.php';
		
		
		$sql = "SELECT * FROM `queries`";
		$result = mysqli_query($conn, $sql);
		
		if (mysqli_num_rows($result) > 0) {
		    // output data of each row
		    while($row = mysqli_fetch_assoc($result)) {
                $date_time=$row['request_date'].','.$row['request_time'];
		    $data[]=array("Emp name"=>$row['emp_name'], "Admin Name"=>$row['admin_name'], "Request"=>$row['request_details'], "Status"=>$row['status'],"Query Id"=>$row['query_id'],"Date Time"=>$date_time );
		    
		    }
			 echo json_encode($data);
		
	}
?>