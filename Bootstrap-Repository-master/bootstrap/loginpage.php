<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/loginpage.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="fonts/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Quicksand|Roboto" rel="stylesheet">  
	
	
</head>

<body>
<?php
	
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		if(!empty($_POST)){
			
		include_once 'backend/dbconnect.php';
		$emp_username=$_POST['emp_username'];
		$emp_password=$_POST['emp_password'];
		
		$sql = "SELECT * FROM employee where emp_name='$emp_username' and emp_password='$emp_password'";
		$result = mysqli_query($conn, $sql);
		
		if (mysqli_num_rows($result) > 0) {
		    // output data of each row
		    while($row = mysqli_fetch_assoc($result)) {
		    /*
			
			Redirect to next page.
			 
			*/
		    }
		} 
		else {
		    $data=array('success' => false, 'message' =>'Login Failed try Again');
			echo '<script type="text/javascript">',
     'jsfunction();',
     '</script>'
;
		   }
		}
		else{
			$array=array('success'=>false,'message'=>'No inputs Found');
		}	
	}
	else{
		$array=array('success'=>false,'message'=>'Send Request Using Only POST method');
	}
?>

<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
   <div class="row">  
        <div class="col-sm-4"> </div>
			<div class="col-sm-4 loginclass">
				<img src="image/logo.png" class="imglogin img-responsive center-block"/> 
				
				<div class="form-group input-group input-group-lg">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                    <input type="text" name="emp_username" class="form-control" id="guest_name" placeholder="Guest Name">
                </div>
				
                <div class="form-group input-group input-group-lg">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                    <input type="password" name="emp_password" class="form-control" id="password" placeholder="Password">
                </div>
				<button type="submit" class="btn btn-success center-block">Login</button>
                <div class="col-sm-offset-5 col-sm-7">
					
				</div>
				<div id="login_failed" class="alert alert-danger">
					<strong>Login Failed !</strong> Please check credentials.
				</div>
		</div> 
	</div>      
</form>   
	   
</body>
<script type="text/javascript">
    function jsfunction(){
		document.getElementById("login_failed").disabled = True;
	}
</script>

</html>