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

	<title>VISA</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/header.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/visa.js"></script>
    <link rel="stylesheet" href="css/semantic.min.css"/>
    <script src="js/semantic.min.js"></script>
    <link rel="stylesheet" href="fonts/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Quicksand|Roboto" rel="stylesheet">
    <script type="text/javascript" src="js/datepicker.js"></script>
    <link rel="stylesheet" href="css/datepickerstyle.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.css"/>
    <link rel="stylesheet" href="css/visa.css">
    <script>
          $(document).ready(function() {
              $('ui.dropdown').dropdown();
              $('.ui.checkbox').checkbox();
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
       
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
        <div class="visadiv card">
            <fieldset><legend>VISA Booking:</legend>
            <div class="row">
                <div class="caldiv form-group  input-group date input-group-lg" >
                    <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                        <input class="form-control" id="visa_start_date" name="from_date" placeholder="Enter Starting Date" type="text" />
                </div>
                <div class="caldiv form-group  input-group input-group-lg">
                    <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                        <input class="form-control" id="visa_end_date" name="to_date" placeholder="Enter End Date" type="text" />
                </div>
                <div class="dropdowndiv ui selection dropdown">
                    <input type="hidden" name="country">
                    <i class="dropdown icon"></i>
                    <div class="default text">Select Country</div>
                    <div class="menu">
                        <div class="item" value="AF">Afghanistan</div>
                        <div class="item" value="AX">Åland Islands</div>
                        <div class="item" value="AL">Albania</div>
                        <div class="item" value="DZ">Algeria</div>
                        <div class="item" value="AS">American Samoa</div>
                        <div class="item" value="AD">Andorra</div>
                        <div class="item" value="AO">Angola</div>
                        <div class="item" value="AI">Anguilla</div>
                    </div>
                </div>
            </div><br>
                
            <div class="form-group">
                    <label for="comment">Comment:</label>
                    <textarea class="form-control" name="comment" rows="2" id="comment"></textarea>
            </div>
                   
            <div class="row"> 
                <div class="row">
                    <div class="col-sm-4"></div>
                    <hr>
                    <div class="col-sm-4 submitbutton" >
                        <button type="submit" class="btn btn-primary"><i class="fa fa-upload" aria-hidden="true"></i> &nbsp;&nbsp;Submit</button> 
                    </div>
                    <div class="col-sm-4"></div>
                </div>              
            </div>
            </fieldset>
        </div>
    </form>
        

<?php	
		if(!empty($_POST)){
            if($_POST['from_date'] != "" & $_POST['to_date']!="" & $_POST['country']!=""){
			include_once 'backend/dbconnect.php';	  
			 $from_date =$_POST['from_date'];
			 $to_date =$_POST['to_date'];
			 $country = $_POST['country'];
            $comment=$_POST['comment'];

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
                               
			    $sqlr="INSERT INTO `visa_request`(`emp_name`, `admin_name`, `querie_id`, `visa_start_date`, `visa_end_date`, `visa_country`,`vi_comment`) VALUES ('$emp_name','$admin_name','$query_id','$from_date','$to_date','$country','$comment')";
				$result=mysqli_query($conn,$sqlr);
                  
               
			}
                header("Location: ticketraised.php");
        }
        }
	
?>
</body>
</html>
