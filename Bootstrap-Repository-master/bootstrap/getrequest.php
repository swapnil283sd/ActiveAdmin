<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<head>

	<title>Get Request</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/getrequest.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/getrequest.js"></script>
    <link rel="stylesheet" href="css/semantic.min.css"/>
    <script src="js/jquery.min.js"></script>
    <script src="js/semantic.min.js"></script>
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
    
    <form class="ui form" action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
		<div class="querydiv card">
			<div class="dropdowndiv ui selection dropdown ">
				<input type="hidden" name="query_details" style="height:40px;" >
				<i class="dropdown icon"></i>
                <div class="default text ">Query Details</div>
				<select class="ui fluid dropdown" required class="form-control">
                    <option value="">Query Details</option>
					<option value="hotel Booking Request">Hotel Booking Request</option>
					<option value="Flight Ticket Booking Request">Flight Ticket Booking Request</option>
					<option value="VISA Request">VISA Request</option>
					<option value="Lunch Arragement For User">Lunch Arragement For User</option>
					<option value="Taxi Arragement">Taxi Arragement</option>
				</select>
			</div><br><br>
            
			<div class="dropdowndiv ui selection dropdown">
				<input type="hidden" name="admin_name">
  				<i class="dropdown icon"></i>
  				<div class="default text">Admin Name</div>
				<select class="ui fluid dropdown">
					<option value="">Admin Name</option>
					<option value="Omkar Deshpande">Omkar Deshpande</option>
					<option value="Vaidya Sir">Vaidya Sir</option>
					<option value="Sachin Kulkarni">Sachin Kulkarni</option>
				</select>
            </div><br>
			
			<div class="row">
				<div class="col-sm-4 " ></div>
                <hr>
                <div class="col-sm-4 submitbutton" >
					<button type="submit" class="btn btn-primary"><i class="fa fa-upload" aria-hidden="true"></i> &nbsp;&nbsp;Submit</button> 
                </div>
                <div class="col-sm-4 " ></div>                     
            </div>
        </div>
    </form>
    
	<?php	
		if(!empty($_POST)){
			include_once 'backend/dbconnect.php';	  
			 $query_details=$_POST['query_details'];
			 $admin_name=$_POST['admin_name'];
			 

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
                
                $_SESSION["query"] = $token;
                
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
<script>
    $('.ui.dropdown')
    .dropdown();
</script> 
 
</html>
