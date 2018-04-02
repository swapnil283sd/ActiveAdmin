<?php
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

        <form action="" method="post">
                    
              <div class="hoteldiv card">

                <div class="form-group  input-group input-group-lg">
                    <span class="input-group-addon">
                        <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                    </span>
                    <input type="text" name="guest_name" class="form-control" placeholder="Guest Name">
                </div>

                <div class="form-group  input-group input-group-lg">
                    <span class="input-group-addon">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                    </span>
                    <input type="text" class="form-control" name="city" placeholder="Enter city, location or Hotel Name">
                </div>

                <div class="checkbox col-md-offset-4 ">
                    <label class="preference"><input type="checkbox" name="no_pref" class="clicked"onclick="disableElement()">No Preference </label>
                </div>

                <div class="row">
                    <div class="col-sm-6 ">
                        <div class="form-group input-group input-group-lg">
                            <span class="input-group-addon">
                                <i class="fa fa-h-square" aria-hidden="true"></i>
                            </span>
                            <input type="text" class="form-control" name="pref1" placeholder="Preference  1">
                        </div>
                    </div>
                    <div class="col-sm-6 ">
                        <div class="form-group input-group input-group-lg">
                            <span class="input-group-addon">
                                <i class="fa fa-h-square" aria-hidden="true"></i>
                            </span>
                            <input type="text" class="form-control" name="pref2" placeholder="Preference  2">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6 ">
                        <div class="form-group  input-group input-group-lg">
                            <span class="input-group-addon">
                                <i class="fa fa-calendar" aria-hidden="true"></i>
                            </span>
                            <input class="form-control" id="Date" name="checkin_date" placeholder="Check In" type="text" />
                        </div>
                    </div>

                    <div class="col-sm-6 ">
                        <div class="form-group  input-group input-group-lg">
                            <span class="input-group-addon">
                                <i class="fa fa-calendar" aria-hidden="true"></i>
                            </span>
                            <input class="form-control" name="checkout_date" placeholder="Check Out" type="text" />
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
            $no_pref=$_POST['no_pref'];
            $pref1=$_POST['pref1'];
            $pref2=$_POST['pref2'];
            $checkin_date=$_POST['checkin_date'];
            $checkout_date=$_POST['checkout_date'];
            $members_count=$_POST['members_count'];
            $room_count=$_POST['room_count'];

			/* 
			include "md.php";

			 $foo_token=md5(getToken(20));
			 
			 date_default_timezone_set("Asia/Kolkata");
			 $date=date("y-m-d");
			 */
			 $user = $_SESSION["user"];
			//$user ='umesh';
            if($query_details!="" & $admin_name != ""){
            $sqle = "SELECT * FROM employee where emp_name='$user' ";
			$resulte = mysqli_query($conn, $sqle);
			
			if (mysqli_num_rows($resulte) > 0) {
			    // output data of each row
				
				while($row = $resulte->fetch_assoc()) {
					$email = $row["emp_email"];
				}
                //request token generate
                $letter = strtoupper(mb_substr($query_details, 0, 2));
                
			    $sqlr="INSERT INTO queries(emp_name,emp_email,admin_name,request_details, request_date, request_time, status) values ('$user','$email','$admin_name','$query_details',CURRENT_DATE(),CURRENT_TIME(),'0')  ";
				$result=mysqli_query($conn,$sqlr);
                
                $getsr="SELECT `srno` from `queries` WHERE (`emp_name`='$user' AND `admin_name`='$admin_name' AND `request_date`= CURRENT_DATE() AND `request_time`= CURRENT_TIME())";
                $srn=mysqli_query($conn,$getsr);
                
				while($row = $srn->fetch_assoc()) {
					$sr_no = $row["srno"];}
                
                $token = $letter.'-'.$sr_no;
               
                $upd = "UPDATE `queries` SET `query_id`='$token' WHERE `srno`='$sr_no'";
                $updt=mysqli_query($conn,$upd);
                if($letter=='HO'){
				    header("Location: hotel_booking.php");
                }else if($letter=='FL'){
                    header("Location: hotel_booking.php");
                }else if($letter=='VI'){
                    header("Location: visa.php");
                }else if($letter=='LU'){
                    header("Location: lunchsystem.php");
                }else if($letter=='TA'){
                    header("Location: taxibooking.php");
                }

			}
		}
        }
	
?>
</body>

</html>
