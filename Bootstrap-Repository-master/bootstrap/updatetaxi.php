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
    <link rel="stylesheet" href="css/semantic.min.css"/>
    <script src="js/semantic.min.js"></script>
    <link rel="stylesheet" href="fonts/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Quicksand|Roboto" rel="stylesheet">
    <script type="text/javascript" src="js/datepicker.js"></script>
    <link rel="stylesheet" href="css/datepickerstyle.css" />
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.css"/>
    <script>
          $(document).ready(function() {
              $('ui.dropdown').dropdown();
              
          });
    </script> 
</head>

<body>
	<div class="navbar">
		<img  src="image/logo.png" />    
		<a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp; Logout</a>
		<a href="myactivity.php"><i class="fa fa-list-ol" aria-hidden="true"></i>&nbsp; My Activity</a>
		<a href="getrequest.php"><i class="fa fa-home" aria-hidden="true"></i>&nbsp; Home</a>
    </div>

    
    <div class="topimageclass">
        <img src="image/topimage.png" style="width: 400px;height: 300px;" />
    </div>  
   
    <form action="" method="post">
        <div class="taxidiv card">
            <div class="form-group  input-group input-group-lg">
                <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                <input type="text" class="form-control" id="taxi_guest_name" name="taxi_guest_name" id="usr" placeholder="Guest Name" required>
                 <input type="hidden" name="query_id" id="queryid" class="form-control" value="<?php $query_id=$_GET['query_id']; echo $query_id; ?>" >
            </div>
            <div class="row">
                <div class="col-sm-6 " >
                    <div class="form-group  input-group input-group-lg">
                        <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                        <input class="form-control" id="taxi_date" name="taxi_date" placeholder="Enter Starting Date" type="text" required>
                    </div>
                </div>
                <div class="col-sm-6 " >
                    <div class="form-group  input-group input-group-lg">
                        <span class="input-group-addon"><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                        <input class="form-control"  id="taxi_time" name="taxi_time" placeholder="Time" type="number" required>
                    </div>
                </div>    
            </div>
        
                <div class="dropdowndiv ui selection dropdown">
				<input type="hidden" id="admin_name" name="admin_name" required>
  				<i class="dropdown icon"></i>
  				<div class="default text">Admin Name</div>
				<select class="ui fluid dropdown">
					<option value="">Admin Name</option>
					<option value="Omkar Deshpande">Omkar Deshpande</option>
					<option value="Vaidya Sir">Vaidya Sir</option>
					<option value="Sachin Kulkarni">Sachin Kulkarni</option>
				</select>
            </div><br><br>
            
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
           
			include_once 'backend/dbconnect.php';	  
			 $taxi_guest_name =$_POST['taxi_guest_name'];
			 $taxi_date =$_POST['taxi_date'];
			 $taxi_time = $_POST['taxi_time'];
            $admin_name = $_POST['admin_name'];
			
			
                               
			    $sqlr="UPDATE `taxi_booking` SET `admin_name`='$admin_name', `querie_id`='$query_id', `taxi_start_date`='$taxi_date', `taxi_guest_name`='$taxi_guest_name', `taxi_time`='$taxi_time' WHERE `querie_id`='$query_id'";
				$result=mysqli_query($conn,$sqlr);
                  
               
			}
        
        }
	
?>
    
</body>

</html>
