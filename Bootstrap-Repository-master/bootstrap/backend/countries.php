<?php
header('Content-Type:application/json');
	
		
			
		include_once 'dbconnect.php';
		
		
		$sql = "SELECT * FROM countries";
		$result = mysqli_query($conn, $sql);
		
		if (mysqli_num_rows($result) > 0) {
		    // output data of each row
		    while($row = mysqli_fetch_assoc($result)) {
		    $data[]=array("Country Code"=>$row['country_code'], "Conutry Name"=>$row['country_name']);
		    
		    }
			 echo json_encode($data);
		
	}
?>