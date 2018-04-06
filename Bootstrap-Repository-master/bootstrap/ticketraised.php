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

	<title>Ticket Title</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/ticketgreen.css">
     <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="fonts/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Quicksand|Roboto" rel="stylesheet">
   
</head>
<body>

	
    <div class="ticketview">
        
        <div class="ticketheader"> <span id="querytitle"> </span></div>
        
        
        <div class="upperhalf">
        
            
            <br>
            <span class="querymessage"><b>You Successfully raised ticket !</b></span>

        
        </div>
    
           
        <div class="cutouts_left"></div>
        <div class="statusdiv"> <i class="fa fa-check-circle"></i> </div>
        <div class="cutouts_right"></div>
        
        
        <div class="lowerhalf">
        
              <br>
            <span class="querymessage" ><b>Ticket Number:- <?php echo $_SESSION["query"] ?></b></span>
            <br>
             
            
            <div class="ticketfooter">
            
                <span><a href="http://localhost/getrequest.php" style="color:#fff"><u>Please click here if you are not auto redirected.</u></a></span>
             
            </div>
        
        </div>
    
    </div>
        
     
</body>
</html>
 <?php header( "refresh:5;url=http://localhost/getrequest.php" ); ?>