﻿<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<head>

    <title>Hotel Booking</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/hotel_booking.css">
    <link rel="stylesheet" href="css/semantic.min.css"/>
    <script src="js/semantic.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/hotel_booking.js"></script>
    
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
        <img src="image/topimage.png" style="width: 400px;height: 280px;" />
    </div>

        <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
            <div class="hoteldiv card">
                <div class="form-group  input-group input-group-lg">
                    <span class="input-group-addon"><i class="fa fa-user-circle-o" aria-hidden="true"></i></span>
                    <input type="text" name="guest_name" class="form-control" placeholder="Guest Name">
                </div>

                <div class="form-group  input-group input-group-lg">
                    <span class="input-group-addon">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                    </span>
                    <input type="text" class="form-control" name="city" placeholder="Enter city, location or Hotel Name">
                </div>

                <div class="checkbox col-md-offset-4 ">
                    <label class="preference"><input type="checkbox" id="check" name="check" class="clicked" onclick="disableElement()">No Preference </label>
                </div>

                <div class="row">
                    <div class="col-sm-6 ">
                        <div class="form-group input-group input-group-lg">
                            <span class="input-group-addon">
                                <i class="fa fa-h-square" aria-hidden="true"></i>
                            </span>
                            <input type="text" class="form-control" id="preferance1" name="pref1" placeholder="Preference  1">
                        </div>
                    </div>
                    <div class="col-sm-6 ">
                        <div class="form-group input-group input-group-lg">
                            <span class="input-group-addon">
                                <i class="fa fa-h-square" aria-hidden="true"></i>
                            </span>
                            <input type="text" class="form-control" id="preferance2" name="pref2" placeholder="Preference  2">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6 ">
                        <div class="form-group  input-group input-group-lg">
                            <span class="input-group-addon">
                                <i class="fa fa-calendar" aria-hidden="true"></i>
                            </span>
                            <input class="form-control" id="date" name="checkin_date" placeholder="Check In" type="text" />
                        </div>
                    </div>

                    <div class="col-sm-6 ">
                        <div class="form-group  input-group input-group-lg">
                            <span class="input-group-addon">
                                <i class="fa fa-calendar" aria-hidden="true"></i>
                            </span>
                            <input class="form-control" id="date" name="checkout_date" placeholder="Check Out" type="text" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6 ">
                        <div class="form-group  input-group input-group-lg">
                            <span class="input-group-addon"><i class="fa fa-users" aria-hidden="true"></i> </span>
                            <input class="form-control" name="members_count" placeholder="Members" type="number" min="1"/>
                        </div>
                    </div>

                    <div class="col-sm-6 ">
                        <div class="form-group  input-group input-group-lg">
                            <span class="input-group-addon">
                                <i class="fa fa-list-ol" aria-hidden="true"></i>
                            </span>
                            <input class="form-control" name="room_count" name="no_room" placeholder="No.of Rooms" type="number" min="1" />
                        </div>
                    </div>
                </div>

                <hr />
                <div class="row">
                    <div class="col-sm-4 ">
                    </div>
                    <div class="col-sm-4 submitbutton">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-upload" aria-hidden="true"></i> &nbsp;&nbsp;Submit</button>
                    </div>
                    <div class="col-sm-4 ">
                    </div>
                </div>

            </div>

        </form>
    
    <?php
	
	
		if(!empty($_POST)){
			include_once 'backend/dbconnect.php';	  
			 $guest_name=$_POST['guest_name'];
			 $city=$_POST['city'];
            
            if(isset($_POST['check'])){
            $pref1='NULL';
            $pref2='NULL';}else{
                $pref1=$_POST['pref1'];
                $pref2=$_POST['pref2'];
            }
            $checkin_date=$_POST['checkin_date'];
            $checkout_date=$_POST['checkout_date'];
            $members_count=$_POST['members_count'];
            $room_count=$_POST['room_count'];

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
                               
			    $sqlr="INSERT INTO `hotel_book`(`emp_name`, `admin_name`, `hotel_city`, `hotel_pre1`, `hotel_pre2`, `hotel_checkin`, `hotel_checkout`, `hotel_guestname`, `hotel_member`, `hotel_roomcount`, `query_id`) VALUES ('$emp_name','$admin_name','$city','$pref1','$pref2','$checkin_date','$checkout_date','$guest_name','$members_count','$room_count','$query_id')";
				$result=mysqli_query($conn,$sqlr);
                  
               
			}
		}
        
	
?>
</body>

</html>
