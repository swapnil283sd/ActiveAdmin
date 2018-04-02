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
    <script src="js/jquery.min.js"></script>
    <script src="js/semantic.min.js"></script>
    <link rel="stylesheet" href="fonts/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Quicksand|Roboto" rel="stylesheet">
    <script type="text/javascript" src="js/datepicker.js"></script>
    <link rel="stylesheet" href="css/datepickerstyle.css" />
   <script>
          $(document).ready(function() {
              $('.dropdown').dropdown();
              $('.ui.checkbox').checkbox();
          });
      </script> 
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
        
        
              
                <div class="visadiv card">
                    
             
                <div class="row">
                    
                            <div class="caldiv form-group  input-group input-group-lg">
                                <span class="input-group-addon">
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                </span>
                                <input class="form-control" id="Date" name="date" placeholder="Enter Starting Date" type="text" />
                       
                            </div>
                    
                    
                    <div class="caldiv form-group  input-group input-group-lg">
                                <span class="input-group-addon">
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                </span>
                                <input class="form-control" id="Date" name="date" placeholder="Enter End Date" type="text" />
                       
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
                    </div>
            
                    
                <div class="row"> 
               
                
                    
                <div class="row">
                   
                    <div class="col-sm-4 " >
                        
                    </div>
                    <hr>
                     <div class="col-sm-4 submitbutton" >
                         <button type="submit" class="btn btn-primary"><i class="fa fa-upload" aria-hidden="true"></i> &nbsp;&nbsp;Submit</button> 
                    </div>
                    
                    <div class="col-sm-4 " >
                        
                    </div>
                    
                    
               </div>              

             </div>
    </div>
    </form>
    
    

    
</body>
    
 
</html>
