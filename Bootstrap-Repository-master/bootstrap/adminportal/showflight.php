<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<head>

	<title>FLIGHT BOOKING</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
	
    <link rel="stylesheet" href="css/header.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/flight_booking.js"></script>
    <link rel="stylesheet" href="css/semantic.min.css"/>
    <script src="js/semantic.min.js"></script>
    <link rel="stylesheet" href="fonts/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Quicksand|Roboto" rel="stylesheet">
    <script type="text/javascript" src="js/datepicker.js"></script>
    <link rel="stylesheet" href="css/datepickerstyle.css" />
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.css"/>
    <link rel="stylesheet" href="css/flight.css">
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
            <fieldset><legend>Flight Booking:</legend>
            <div class="form-group">
                <!--  <label for="usr">Name Of Person:</label> -->
               
                <div class="form-group  input-group input-group-lg">
                    <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                    <input type="text" class="uione form-control" id="guest_name" name="guest_name"  placeholder="Guest Name" disabled>
                    <input type="hidden" name="query_id" id="queryid" class="form-control" value="<?php $query_id=$_GET['query_id']; echo $query_id; ?>" >
                </div>
            </div>
            <div class="row">
                    <div class="col-sm-6 ">
                        <div class="form-group  input-group input-group-lg">
                            <span class="input-group-addon">
                                <i class="fa fa-calendar" aria-hidden="true"></i>
                            </span>
                            <input class="form-control" id="startdate" name="from_date" placeholder="Journey Start Date" type="text" disabled>
                        </div>
                    </div>

                    <div class="col-sm-6 ">
                        <div class="form-group  input-group input-group-lg">
                            <span class="input-group-addon">
                                <i class="fa fa-calendar" aria-hidden="true"></i>
                            </span>
                            <input class="form-control" id="enddate" name="to_date" placeholder="Journey End Date" type="text" disabled>
                        </div>
                    </div>
                </div>
            <div class="row">
               <div class="col-sm-6 " > 
               
                      <div class="form-group">
               
                <div class="passdiv form-group  input-group input-group-lg">
                    <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                    <input type="text" class="uione form-control" id="fromcity" name="fromcity"  placeholder="Passport Number" disabled>
                </div>
            </div>
                   
                   
                </div>

                <div class="col-sm-6 " > 
             <div class="form-group">
               
                <div class="passdiv form-group  input-group input-group-lg">
                    <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                    <input type="text" class="uione form-control" id="tocity" name="tocity"  placeholder="Passport Number" disabled>
                </div>
            </div>
                       
                        
                </div>
            </div>
            
            <div class="form-group">
               
                <div class="passdiv form-group  input-group input-group-lg">
                    <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                    <input type="text" class="uione form-control" id="passportno" name="passportno"  placeholder="Passport Number" disabled>
                </div>
            </div>
                
            <div class="form-group">
                <label for="comment">Comment:</label>
                <textarea class="form-control" rows="2" id="comment" disabled></textarea>
            </div>
                    
             <span id="emp_name" style="float:right;color:#1380BF;"></span>
                
                </fieldset>
        </div>
              
    </form>
        
<script>

         var xmlhttp=new XMLHttpRequest();
        
        xmlhttp.onreadystatechange=function(){
            
            if(this.readyState==4 && this.status == 200){
               
                
                var myObj=JSON.parse(this.responseText);
                
                document.getElementById("guest_name").value=myObj.guest_name;
                
                document.getElementById("startdate").value=myObj.startdate;
                
                 document.getElementById("enddate").value=myObj.enddate;
                
                document.getElementById("fromcity").value=myObj.fromcity;
                 document.getElementById("tocity").value=myObj.tocity;
                  document.getElementById("passportno").value=myObj.passportno;
                 document.getElementById("emp_name").innerHTML="Raised by:- "+myObj.emp_name;
                 document.getElementById("comment").innerHTML=myObj.comment;
                
                
            }
            
        }
        
        $(document).ready(function(){
           
        var queryid=document.getElementById("queryid").value;
        xmlhttp.open("GET","http://localhost/adminportal/backend/status_query.php?query_id="+queryid,true);
                xmlhttp.send();
        });
    
</script>    
<?php	
		if(!empty($_POST)){
            
			include_once 'backend/dbconnect.php';
            $query_id=$_POST['query_id'];
			 $guest_name =$_POST['guest_name'];
			 $from_date =$_POST['from_date'];
			 $to_date = $_POST['to_date'];
            $fromcountry = $_POST['fromcountry'];
            $tocountry = $_POST['tocountry'];
            $passportno = $_POST['passportno'];
            $admin_name=$_POST['admin_name'];
			
                               
			    $sqlr="UPDATE `flight_book` SET `admin_name`='$admin_name',`flight_origin`='$fromcountry',`flight_desctination`='$tocountry',`flight_start_date`='$from_date',`flight_end_date`='$to_date',`flight_on_person`='$guest_name',`flight_passport_number`='$passportno' WHERE `query_id`='$query_id'";
				$result=mysqli_query($conn,$sqlr);
                  
               
			}
        
        
	
?>
</body>
</html>
