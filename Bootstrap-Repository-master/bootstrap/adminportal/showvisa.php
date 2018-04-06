<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<head>

	<title>VISA</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/visa.css">
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
            <div class="row">
                <div class="caldiv form-group  input-group date input-group-lg" >
                    <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                        <input class="form-control" id="visa_start_date" name="from_date" placeholder="Enter Starting Date" type="text" disabled/>
                </div>
                <div class="caldiv form-group  input-group input-group-lg">
                    <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                        <input class="form-control" id="visa_end_date" name="to_date" placeholder="Enter End Date" type="text" disabled />
                     <input type="hidden" name="query_id" id="queryid" class="form-control" value="<?php $query_id=$_GET['query_id']; echo $query_id; ?>" >
                </div>
                
                        <div class="caldiv form-group  input-group input-group-lg">
                    <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                        <input class="form-control" id="visa_country" name="to_date" placeholder="Enter End Date" type="text" disabled/>
                   
                </div>
                
               
            </div>
            
                    
              <div class="form-group">
                <label for="comment">Comment:</label>
                <textarea class="form-control" rows="2" id="commentvisa" disabled></textarea>
            </div>
             
                    <hr>
                              
            
        </div>
    </form>
        

<?php	
		if(!empty($_POST)){
            if($_POST['from_date'] != "" & $_POST['to_date']!="" & $_POST['country']!=""){
			include_once 'backend/dbconnect.php';
               $query_id = $_POST['query_id']; 
			 $from_date =$_POST['from_date'];
			 $to_date =$_POST['to_date'];
			 $country = $_POST['country'];
            $admin_name= $_POST['admin_name'];
                               
			    $sqlr="UPDATE `visa_request` SET `admin_name`='$admin_name', `visa_start_date`='$from_date',`visa_end_date`='$to_date',`visa_country`='$country' WHERE `querie_id`='$query_id'";
				$result=mysqli_query($conn,$sqlr);
                  
               
			}
        }
        
	
?>
    
    <script>
         var xmlhttp=new XMLHttpRequest();
        
        xmlhttp.onreadystatechange=function(){
            
            if(this.readyState==4 && this.status == 200){
                var myObj=JSON.parse(this.responseText);
                
                document.getElementById("visa_start_date").value=myObj.visa_start_date;
                
                document.getElementById("visa_end_date").value=myObj.visa_end_date;
                
                 document.getElementById("visa_country").value=myObj.visa_country;
                
                

                
              
                
                
            }
            
        }
        
        $(document).ready(function(){
        var queryid=document.getElementById("queryid").value;
        xmlhttp.open("GET","http://localhost/adminportal/backend/status_query.php?query_id="+queryid,true);
                xmlhttp.send();
        });
    </script>    
</body>
</html>
