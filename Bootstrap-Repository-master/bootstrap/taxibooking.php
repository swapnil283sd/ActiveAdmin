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
    <script src="js/taxibooking.js"></script>
    <link rel="stylesheet" href="fonts/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Quicksand|Roboto" rel="stylesheet">
    <script type="text/javascript" src="js/datepicker.js"></script>
    <link rel="stylesheet" href="css/datepickerstyle.css" />
    <link rel="stylesheet" href="css/header.css">
</head>

<body>
	<div class="navbar">
		<img  src="image/logo.png" />    
		<a href="#contact"><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp; Logout</a>
		<a href="#news"><i class="fa fa-list-ol" aria-hidden="true"></i>&nbsp; My Activity</a>
		<a href="#home"><i class="fa fa-home" aria-hidden="true"></i>&nbsp; Home</a>
    </div>

    
    <div class="topimageclass">
        <img src="image/topimage.png" style="width: 400px;height: 300px;" />
    </div>  
   
    <form action="" method="post">
        <div class="taxidiv card">
            <div class="form-group  input-group input-group-lg">
                <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                <input type="text" class="form-control" name="taxi_guest_name" id="usr" placeholder="Guest Name">
            </div>
            <div class="row">
                <div class="col-sm-6 " >
                    <div class="form-group  input-group input-group-lg">
                        <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                        <input class="form-control" id="date" name="taxi_date" placeholder="Enter Starting Date" type="text" />
                    </div>
                </div>
                <div class="col-sm-6 " >
                    <div class="form-group  input-group input-group-lg">
                        <span class="input-group-addon"><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                        <input class="form-control"  name="taxi_time" placeholder="Time" type="number" />
                    </div>
                </div>    
            </div>
            <div class="row"></div>
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4 submitbutton" >
                    <button type="submit" class="btn btn-primary"><i class="fa fa-upload" aria-hidden="true"></i> &nbsp;&nbsp;Submit</button> 
                </div>
                <div class="col-sm-4"></div>
            </div>              
        </div>
    </form>
    
<?php	
		if(!empty($_POST)){
            if($_POST['taxi_guest_name'] != "" & $_POST['taxi_date']!="" & $_POST['taxi_time']!=""){
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
        }
	
?>
    
</body>

</html>
