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
    <script src="js/lunchsystem.js"></script>
    <link rel="stylesheet" href="fonts/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Quicksand|Roboto" rel="stylesheet">
    <script type="text/javascript" src="js/datepicker.js"></script>
        <script type="text/javascript" src="js/lunchsystem.js"></script>

    <link rel="stylesheet" href="css/datepickerstyle.css" />
    <script type="text/javascript" src="js/timepicker.js"></script>
   <link rel="stylesheet" href="css/semantic.min.css"/>
    <script src="js/jquery.min.js"></script>
    <script src="js/semantic.min.js"></script>
    <script src="js/lunchsystem.js"></script>
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
        
        
              
                <div class="lunchdiv card">
                    
                 
                    <div class="form-group">
                      <!--  <label for="usr">Guest Name:</label> -->
                        <div class="form-group  input-group input-group-lg">
                                <span class="input-group-addon">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                </span>
                               <input type="text" class="uione form-control" id="usr"  placeholder="Guest Name"/>
                       
                           </div>
                      

                    </div>
                    
                    <!--Add dropdown Here -->
                    <div class="row">
                   
                    <div class="col-sm-6 " >
                                  
 								<div class="ui selection dropdown" >
                                <i class="fas fa-utensils" aria-hidden="true"></i>

  										<input type="hidden" name="Course">
  											<i class="dropdown icon"></i> 
  											<div class="default text">Select Course</div>
											       
 								      			  <div class="menu">
												           
                                                          <div class="item" data-value="Veg" data-text="Veg">
      													  <i class="remove circle outline icon"></i> Veg</div>

   														  <div class="item" data-value="Non-Veg" data-text="Non-Veg">
      													  <i class="remove circle outline icon"></i>Non-Veg</div>

  												</div>
                                </div>  
                           
                    </div>
                    
                    <div class="col-sm-6 " >
                             <div class="form-group  input-group input-group-lg">
                                <span class="input-group-addon">
                                    <i class="fa fa-user-plus" aria-hidden="true"></i>
                                </span>
                                <input class="form-control"  name="member" placeholder="Member" type="number" />
                       
                           </div>
                    </div>
                    
                </div>
                    <!-- Dropdown End here-->
                    
                <div class="row">
                   
                    <div class="col-sm-6 " >
                        
                       
                            <div class="form-group  input-group input-group-lg">
                                <span class="input-group-addon">
                                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                                </span>
                                <input class="form-control"  name="member" placeholder="Time" type="number" />
                       
                        </div>
                    </div>
                    
                    <div class="col-sm-6 " >
                            <div class="form-group  input-group input-group-lg">
                                <span class="input-group-addon">
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                </span>
                                <input class="form-control" id="Date" name="date" placeholder="Date" type="text" />
                       
                            </div>
                    </div>
                    
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
   <script>
    $('.ui.dropdown')
  .dropdown();
  
    </script> 
 
</html>
