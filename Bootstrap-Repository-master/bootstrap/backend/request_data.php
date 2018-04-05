<?php
    header('Content-Type:application/json');
	
    include_once 'dbconnect.php';
    if(!empty($_GET)){
	   $query_id = $_GET['query_id'];	

	   $sql = "SELECT * FROM `queries` WHERE `query_id`='$query_id'";
        $result = mysqli_query($conn, $sql);
		date_default_timezone_set("Asia/Kolkata");

        $date=date("d-m-y");
        $time=date("h:i:s");
		if (mysqli_num_rows($result) > 0) {
		    // output data of each row
		    while($row = mysqli_fetch_assoc($result)) {

                $data=array("emp_name"=>$row['emp_name'], "admin_Name"=>$row['admin_name'], "request"=>$row['request_details'], "Status"=>$row['status'],"query_id"=>$row['query_id'],"date"=>$row['request_date'], "time"=>$row['request_time'],"current_date"=>$date, "current_time"=>$time );

		    }
			 echo json_encode($data);
		}
    }
?>