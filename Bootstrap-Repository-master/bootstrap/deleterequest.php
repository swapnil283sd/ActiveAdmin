<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<head>

	<title>Taxi Booking</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/taxibooking.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="fonts/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Quicksand|Roboto" rel="stylesheet">
    <script type="text/javascript" src="js/datepicker.js"></script>
    <link rel="stylesheet" href="css/datepickerstyle.css" />
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.css"/>
</head>

<body>
	
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
        <center>
        <div class="taxidiv card">
            <fieldset><legend>Query Id</legend>
            <label>Are You Sure?</label>
            <div class="row"><hr></div>
            <div class="row">
                
                
                <div class="col-sm-6 submitbutton" >
                    <button type="submit" class="btn btn-primary"><i class="fa fa-upload" aria-hidden="true"></i> &nbsp;&nbsp;Yes</button> 
                </div>
                <div class="col-sm-6">
                    <button type="submit" class="btn btn-danger"><i class="fa fa-upload" aria-hidden="true"></i> &nbsp;&nbsp;No</button> 
                </div>
            </div>              
           </fieldset>       
  </div>
            </center>
    </form>
    
<?php	
		if(!empty($_POST)){
           
			include_once 'backend/dbconnect.php';	  
			 $taxi_guest_name =$_POST['taxi_guest_name'];
			 $taxi_date =$_POST['taxi_date'];
			 $taxi_time = $_POST['taxi_time'];

			/* 
			 date_default_timezone_set("Asia/Kolkata");
			 $date=date("y-m-d");
			 */
            $user = $_SESSION["user"];
            $query_id = $_SESSION["query"];
			
            $sqle = "SELECT `emp_name`,`admin_name`,`status` FROM `queries` WHERE `query_id`='$query_id'";
			$resulte = mysqli_query($conn, $sqle);
			
			if (mysqli_num_rows($resulte) > 0) {
			    // output data of each row
				
				while($row = $resulte->fetch_assoc()) {
                    $emp_name = $row["emp_name"];
					$admin_name = $row["admin_name"];
                    $status = $row["status"];
				}
                //request token generate
                               
			    $sqlr="INSERT INTO `taxi_booking`(`emp_name`, `admin_name`, `querie_id`, `taxi_start_date`, `taxi_guest_name`, `taxi_time`) VALUES ('$emp_name','$admin_name','$query_id','$taxi_date','$taxi_guest_name', '$taxi_time')";
				$result=mysqli_query($conn,$sqlr);
                  
               
			}
        
        }
	
?>
    
</body>

</html>
