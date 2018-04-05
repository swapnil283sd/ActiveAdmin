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
    
    <script src="js/jquery.min.js"></script>
    <script src="js/semantic.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/hotel_booking.js"></script>
    
    <link rel="stylesheet" href="fonts/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand|Roboto" rel="stylesheet">
    
    <script type="text/javascript" src="js/datepicker.js"></script>
    <link rel="stylesheet" href="css/datepickerstyle.css" />
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
        <img src="image/topimage.png" style="width: 400px;height: 280px;" />
    </div>

        <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
            
            <div class="hoteldiv card">
                <fieldset><legend>Hotel Booking:</legend>
                <div class="form-group  input-group input-group-lg">
                    <span class="input-group-addon"><i class="fa fa-user-circle-o" aria-hidden="true"></i></span>
                    <input type="text" name="guest_name" class="form-control" placeholder="Guest Name" id="guestname" required>
                    
                      <input type="hidden" name="query_id" id="queryid" class="form-control" value="<?php $query_id=$_GET['query_id']; echo $query_id; ?>" >
                </div>

                <div class="form-group  input-group input-group-lg">
                    <span class="input-group-addon">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                    </span>
                    <input type="text" class="form-control" name="city" id="city" placeholder="Enter city, location or Hotel Name" required>
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
                            <input type="text" class="form-control" id="preference1" id="preferenceone" name="pref1" placeholder="Preference 1">
                        </div>
                    </div>
                    <div class="col-sm-6 ">
                        <div class="form-group input-group input-group-lg">
                            <span class="input-group-addon">
                                <i class="fa fa-h-square" aria-hidden="true"></i>
                            </span>
                            <input type="text" class="form-control" id="preference2" name="pref2" id="preferencetwo" placeholder="Preference 2">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6 ">
                        <div class="form-group  input-group input-group-lg">
                            <span class="input-group-addon">
                                <i class="fa fa-calendar" aria-hidden="true"></i>
                            </span>
                            <input class="form-control" id="checkin" name="checkin_date" id="checkin" placeholder="Check In" type="text" required>
                        </div>
                    </div>

                    <div class="col-sm-6 ">
                        <div class="form-group  input-group input-group-lg">
                            <span class="input-group-addon">
                                <i class="fa fa-calendar" aria-hidden="true"></i>
                            </span>
                            <input class="form-control" id="checkout" name="checkout_date" id="checkout" placeholder="Check Out" type="text" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6 ">
                        <div class="form-group  input-group input-group-lg">
                            <span class="input-group-addon"><i class="fa fa-users" aria-hidden="true"></i> </span>
                            <input class="form-control" name="members_count" id="members" placeholder="Members" type="number" min="1"/>
                        </div>
                    </div>

                    <div class="col-sm-6 ">
                        <div class="form-group  input-group input-group-lg">
                            <span class="input-group-addon">
                                <i class="fa fa-list-ol" aria-hidden="true"></i>
                            </span>
                            <input class="form-control" name="room_count" name="no_room" id="noofroom" placeholder="No.of Rooms" type="number" min="1" />
                        </div>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="comment">Comment:</label>
                    <textarea class="form-control" rows="2" id="comment"></textarea>
                </div>

                <hr>
                <div class="row">
                    <div class="col-sm-4 ">
                    </div>
                    <div class="col-sm-4 submitbutton">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-upload" aria-hidden="true"></i> &nbsp;&nbsp;Submit</button>
                    </div>
                    <div class="col-sm-4 ">
                    </div>
                </div>
</fieldset>
            </div>
            
        </form>
    
    
</body>

    <script>
        
        var xmlhttp=new XMLHttpRequest();
        
        xmlhttp.onreadystatechange=function(){
            
            if(this.readyState==4 && this.status == 200){
                var myObj=JSON.parse(this.responseText);
                
                document.getElementById("guestname").value=myObj.guest_name;
                
                document.getElementById("city").value=myObj.city;
                
                 document.getElementById("preference1").value=myObj.prefone;
                
                 document.getElementById("preference2").value=myObj.preftwo;
                
                document.getElementById("checkin").value=myObj.checkin;
                
                 document.getElementById("checkout").value=myObj.checkout;
                
                 document.getElementById("members").value=myObj.member;
                
                document.getElementById("noofroom").value=myObj.room_count;
                
                 document.getElementById("comment").value=myObj.comment;
                
               

                
              
                
                
            }
            
        }
        
        $(document).ready(function(){
        var queryid=document.getElementById("queryid").value;
        xmlhttp.open("GET","http://localhost/backend/status_query.php?query_id="+queryid,true);
                xmlhttp.send();
        });
    
    </script>    
    
    
</html>




<?php
	
	
		if(!empty($_POST)){
            
			include_once 'backend/dbconnect.php';
            $query_id=$_POST['query_id'];
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
                                          
			    $sqlr="UPDATE `hotel_book` SET `hotel_city`='$city',`hotel_pre1`='$pref1',`hotel_pre2`='$pref2',`hotel_checkin`='$checkin_date',`hotel_checkout`='$checkout_date',`hotel_guestname`='$guest_name',`hotel_member`='$members_count',`hotel_roomcount`='$room_count' WHERE `query_id`='$query_id'";
				$result=mysqli_query($conn,$sqlr);
                  
               
			}
		
	
?>