<?php
    header('Content-Type:application/json');
	
    include_once 'dbconnect.php';
    if(!empty($_GET)){
        $query_id = $_GET['query_id'];	
        $status = mb_substr($query_id, 0, 2);

        if($status=='HO'){
		    $sql = "SELECT * FROM `hotel_book` WHERE `query_id`='$query_id'";
            $result = mysqli_query($conn, $sql);
                
            if (mysqli_num_rows($result) > 0) {
		    // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                    $data=array("guest_name"=>$row['hotel_guestname'], "city"=>$row['hotel_city'], "pref1"=>$row['hotel_pre1'], "pref2"=>$row['hotel_pre2'],"chechin"=>$row['hotel_checkin'],"checkout"=>$row['hotel_checkout'], "member"=>$row['hotel_member'],"current_date"=>$row['hotel_roomcount']);
		      }
			  echo json_encode($data);
            }
		  }elseif($status=='FL'){
            $sql = "SELECT * FROM `hotel_book` WHERE `query_id`='$query_id'";
            $result = mysqli_query($conn, $sql);
                echo '$result';
            if (mysqli_num_rows($result) > 0) {
		    // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                    $data=array("guest_name"=>$row['hotel_guestname'], "city"=>$row['hotel_city'], "pref1"=>$row['hotel_pre1'], "pref2"=>$row['hotel_pre2'],"chechin"=>$row['hotel_checkin'],"checkout"=>$row['hotel_checkout'], "member"=>$row['hotel_member'],"current_date"=>$row['hotel_roomcount']);
		      }
			  echo json_encode($data);
            }
                    
        }elseif($status=='VI'){
                $sql = "SELECT * FROM `visa_request` WHERE `querie_id`='$query_id'";
                $result = mysqli_query($conn, $sql);
                
                if (mysqli_num_rows($result) > 0) {
		          // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                    $data=array("visa_start_date"=>$row['visa_start_date'], "visa_end_date"=>$row['visa_end_date'], "visa_country"=>$row['visa_country']);
		          }
			     echo json_encode($data);
                }
                
        }elseif($status=='LU'){
                $sql = "SELECT * FROM `lunch_book` WHERE querie_id='$query_id'";
                $result = mysqli_query($conn, $sql);
                
                if (mysqli_num_rows($result) > 0) {
		          // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                    $data=array("guest_name"=>$row['lunch_guest'], "course"=>$row['lunch_category'], "lunch_member_count"=>$row['lunch_member_count'], "lunch_date"=>$row['lunch_date']);
		          }
			     echo json_encode($data);
                }
            }elseif($status=='TA'){
                $sql = "SELECT * FROM `taxi_booking` WHERE `querie_id`='$query_id'";
                $result = mysqli_query($conn, $sql);
                
                if (mysqli_num_rows($result) > 0) {
		          // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                    $data=array("taxi_guest_name"=>$row['taxi_guest_name'], "taxi_start_date"=>$row['taxi_start_date'], "taxi_time"=>$row['taxi_time']);
		          }
			     echo json_encode($data);
                }
            }
?>