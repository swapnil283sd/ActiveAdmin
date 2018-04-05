<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<head>

	<title>Lunch System</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/lunchsystem.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="fonts/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Quicksand|Roboto" rel="stylesheet">
    <script type="text/javascript" src="js/datepicker.js"></script>
    <link rel="stylesheet" href="css/datepickerstyle.css" />
    <link rel="stylesheet" href="css/semantic.min.css"/>
    <script src="js/semantic.min.js"></script>
    <script src="js/lunchsystem.js"></script>
    <link rel="stylesheet" href="css/header.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.css"/>

    
</head>

<body>
	<div class="navbar">
		<img  src="image/logo.png" />    
		<a href="getrequest.php"><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp; Logout</a>
		<a href="myactivity.php"><i class="fa fa-list-ol" aria-hidden="true"></i>&nbsp; My Activity</a>
		<a href="getrequest.php"><i class="fa fa-home" aria-hidden="true"></i>&nbsp; Home</a>
    </div>
  
    <div class="topimageclass">
        <img src="image/topimage.png" style="width: 400px;height: 300px;" />
    </div>  
    
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
        <div class="lunchdiv card">
            <div class="form-group">
                <!--  <label for="usr">Guest Name:</label> -->
                <div class="form-group  input-group input-group-lg">
                    <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                    <input type="text" class="uione form-control" id="usr" name="guest_name"  placeholder="Guest Name"/>
                </div>
            </div>
            <!--Add dropdown Here -->
            <div class="row">
                <div class="col-sm-6 " >
                    <div class="ui selection dropdown" >
                        <i class="fas fa-utensils" aria-hidden="true"></i>
                        <input type="hidden" name="course">
  						<i class="dropdown icon"></i> 
  						<div class="default text">Select Course</div>
						<div class="menu">
				            <div class="item" data-value="Veg" data-text="Veg"><i class="remove circle outline icon"></i> Veg</div>
                            <div class="item" data-value="Non-Veg" data-text="Non-Veg"><i class="remove circle outline icon"></i>Non-Veg</div>
                        </div>
                    </div>  
                </div>
                <div class="col-sm-6 " >
                    <div class="form-group  input-group input-group-lg">
                        <span class="input-group-addon"><i class="fa fa-user-plus" aria-hidden="true"></i></span>
                            <input class="form-control"  name="member_count" placeholder="Member" type="number" />
                    </div>
                </div>
            </div>
            <!-- Dropdown End here-->
            <div class="row">
                <div class="col-sm-6 " >
                    <div class="form-group  input-group input-group-lg">
                        <span class="input-group-addon"><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                        <input class="form-control"  name="order_time" placeholder="Time" type="time" />
                    </div>
                </div>
                <div class="col-sm-6 " >
                    <div class="form-group  input-group input-group-lg">
                    <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                    <input class="form-control" id="lunch_date" name="order_date" placeholder="Date" type="text" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 " ></div>
                <div class="col-sm-4 submitbutton" >
                    <button type="submit" class="btn btn-primary"><i class="fa fa-upload" aria-hidden="true"></i> &nbsp;&nbsp;Submit</button> 
                </div>
                <div class="col-sm-4 " ></div>
            </div>              
        </div>
    </form>

<?php
	
	
		if(!empty($_POST)){
            if($_POST['course'] != "" & $_POST['order_date']!="" & $_POST['member_count']!=""){
            include_once 'backend/dbconnect.php';	  
			$guest_name = $_POST['guest_name'];
            $course = $_POST['course'];
            $member_count = $_POST['member_count'];
            $order_time = $_POST['order_time'];
            $order_date = $_POST['order_date'];
            
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
                               
			    $sqlr="INSERT INTO `lunch_book`(`emp_name`, `lunch_guest`, `admin_name`, `querie_id`, `lunch_category`, `lunch_date`, `lunch_member_count`) VALUES ('$emp_name','$guest_name','$admin_name','$query_id','$course','$order_date','$member_count')";
				$result=mysqli_query($conn,$sqlr);
                  
               
			}
		}
        }
        
	
?>

</body>
   <script>
    $('.ui.dropdown')
  .dropdown();
  
    </script> 
 
</html>
