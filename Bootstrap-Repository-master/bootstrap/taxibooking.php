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
    
   
    <form action="" method="post">
        
        
              
                <div class="taxidiv card">
                    
                    <div class="form-group  input-group input-group-lg">
                         <span class="input-group-addon">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                         </span>
                        <input type="text" class="form-control " id="usr" placeholder="Guest Name">
                    </div>
                    
            
                <div class="row">
                    <div class="col-sm-6 " >
                            <div class="form-group  input-group input-group-lg">
                                <span class="input-group-addon">
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                </span>
                                <input class="form-control" id="Date" name="date" placeholder="Enter Starting Date" type="text" />
                       
                            </div>
                    </div>
                    
                    <div class="col-sm-6 " >
                        <div class="form-group  input-group input-group-lg">
                                <span class="input-group-addon">
                                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                                </span>
                                <input class="form-control"  name="member" placeholder="Time" type="number" />
                            
                        </div>
                    </div>    
                </div>
            
                    
                <div class="row">   
                </div>
                
                    
                <div class="row">
                   
                    <div class="col-sm-4 " >
                        
                    </div>
                    
                    <div class="col-sm-4 submitbutton" >
                         <button type="submit" class="btn btn-primary"><i class="fa fa-upload" aria-hidden="true"></i> &nbsp;&nbsp;Submit</button> 
                    </div>
                    
                    <div class="col-sm-4 " >
                        
                    </div>
                    
                    
               </div>              

             </div>
        
    </form>
    
    

    
</body>
    
 
</html>