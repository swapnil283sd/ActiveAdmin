<?php
    header('Content-Type:application/json');
	
    include_once 'dbconnect.php';
    if(!empty($_GET)){
		$query_id = $_GET['query_id'];
		$status = $_GET['status'];
		$sql = "UPDATE `queries` SET `status`='$status' WHERE `query_id`='$query_id'";
        $result = mysqli_query($conn, $sql);
		
		if (mysqli_num_rows($result) > 0) {
		    // output data of each row
		    while($row = mysqli_fetch_assoc($result)) {
                $data[]=array("Status"=>"Status Updated Successfully!");
		    }
			echo json_encode($data);
		}
    }
?>