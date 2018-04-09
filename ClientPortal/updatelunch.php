<?php
// Start the session
session_start();

if(!isset($_SESSION["user"])){
    header("Location: login.php");
}
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
            <fieldset><legend>Lunch Booking:</legend>
            <div class="form-group">
                <!--  <label for="usr">Guest Name:</label> -->
                <div class="form-group  input-group input-group-lg">
                    <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                    <input type="hidden" name="query_id" id="queryid" class="form-control" value="<?php $query_id=$_GET['query_id']; echo $query_id; ?>" >
                    <input type="text" class="uione form-control" id="guest_name" name="guest_name"  placeholder="Guest Name"/>
                </div>
            </div>
            <!--Add dropdown Here -->
            <div class="row">
                <div class="col-sm-6 " >
                    <div class="ui selection dropdown" >
                        <i class="fas fa-utensils" aria-hidden="true"></i>
                        <input type="hidden"  name="course">
  						<i class="dropdown icon"></i> 
  						<div class="default text" id="course">Select Course</div>
						<div class="menu">
				            <div class="item" data-value="Veg" data-text="Veg"><i class="remove circle outline icon"></i> Veg</div>
                            <div class="item" data-value="Non-Veg" data-text="Non-Veg"><i class="remove circle outline icon"></i>Non-Veg</div>
                        </div>
                    </div>  
                </div>
                <div class="col-sm-6 " >
                    <div class="form-group  input-group input-group-lg">
                        <span class="input-group-addon"><i class="fa fa-user-plus" aria-hidden="true"></i></span>
                            <input class="form-control" id="lunch_member_count" name="member_count" placeholder="Member" type="number" />
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
            
            <div class="form-group">
                    <textarea class="form-control" placeholder="Comment" rows="2" id="comment"></textarea>
                </div>
            
            <div class="row">
                <div class="col-sm-4 " ></div><hr>
                <div class="col-sm-4 submitbutton" >
                    <button type="submit" class="btn btn-primary"><i class="fa fa-upload" aria-hidden="true"></i> &nbsp;&nbsp;Submit</button> 
                </div>
                <div class="col-sm-4 " ></div>
            </div>  
            </fieldset>
        </div>
    </form>

<?php
	
	
		if(!empty($_POST)){
            if($_POST['course'] != "" & $_POST['order_date']!="" & $_POST['member_count']!=""){
            include_once 'backend/dbconnect.php';
            $query_id=$_POST[''];
			$guest_name = $_POST['guest_name'];
            $course = $_POST['course'];
            $member_count = $_POST['member_count'];
            $order_time = $_POST['order_time'];
            $order_date = $_POST['order_date'];
            $admin_name = $_POST['admin_name'];
            $comment=$_POST['comment'];
			
			    $sqlr="UPDATE `lunch_book` SET `lunch_guest`='$guest_name', `lunch_category`='$course', `lunch_date`='$order_date', `lunch_member_count`='$member_count',`admin_name`='$admin_name',`lu_comment`='$comment' WHERE `querie_id`='$query_id';";
				$result=mysqli_query($conn,$sqlr);
                  
               
			}
		}
        
        
	
?>

</body>
   <script>
    $('.ui.dropdown')
  .dropdown();
  
       
        var xmlhttp=new XMLHttpRequest();
        
        xmlhttp.onreadystatechange=function(){
            
            if(this.readyState==4 && this.status == 200){
                var myObj=JSON.parse(this.responseText);
               
                document.getElementById("guest_name").value=myObj.guest_name;
                
                document.getElementById("course").value=myObj.course;
                
                 document.getElementById("lunch_member_count").value=myObj.lunch_member_count;
                
                 document.getElementById("lunch_date").value=myObj.lunch_date;
                 document.getElementById("comment").value=myObj.comment;
                
              
            }
            
        }
        
        $(document).ready(function(){
        var queryid=document.getElementById("queryid").value;
        xmlhttp.open("GET","http://localhost/ClientPortal/backend/status_query.php?query_id="+queryid,true);
                xmlhttp.send();
        });
       
       
    </script> 
 
</html>
