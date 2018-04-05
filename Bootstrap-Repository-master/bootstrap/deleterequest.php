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
	<link rel="stylesheet" href="css/deleterequest.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="fonts/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Quicksand|Roboto" rel="stylesheet">
    <script type="text/javascript" src="js/datepicker.js"></script>
    <link rel="stylesheet" href="css/datepickerstyle.css" />
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.css"/>
</head>

<body>
	
    
        <center>
        <div class="taxidiv card">
            <fieldset><legend>Query Id</legend>
            <label>Do you really want to delete request?</label>
            <div class="row"><hr></div>
            <div class="row">
                
                <div class="col-sm-6">
                    <button type="submit" class="btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i> &nbsp;&nbsp;No</button> 
                </div>
                <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
                <div class="col-sm-6 submitbutton" >
                    <input type="hidden" name="query_id" id="queryid" class="form-control" value="<?php $query_id=$_GET['query_id']; echo $query_id; ?>" >
                    <button type="submit" class="btn btn-primary"><i class="fa fa-check" aria-hidden="true"></i> &nbsp;&nbsp;Yes</button> 
                </div>
                        </form>

                
            </div>              
           </fieldset>       
  </div>
            </center>
    
<?php	
		if(!empty($_POST)){
           
			include_once 'backend/dbconnect.php';	  
			 $query_id=$_POST['query_id'];
            
            $sqle = "UPDATE `queries` SET `status`=3 WHERE `query_id`='$query_id'";
			$resulte = mysqli_query($conn, $sqle);
        
        }
	
?>
    
</body>

</html>
