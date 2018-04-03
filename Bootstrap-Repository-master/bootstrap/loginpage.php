<<<<<<< HEAD
<?php
// Start the session
session_start();
?>
=======
>>>>>>> aaa3dc54e77c57f573724b494db71c7cde6f3850
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/loginpage.css">
<<<<<<< HEAD
	<link rel="stylesheet" href="css/font-awesome.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="fonts/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Quicksand|Roboto" rel="stylesheet">
	
	<script type="text/javascript">
	 
		function jsfunction(){
				document.getElementById("login_failed").style.visibility = "visible";
		}
	</script>

</head>

<body>
	<?php
		if(!empty($_POST)){
			include_once 'backend/dbconnect.php';
			$emp_username=$_POST['emp_username'];
			$emp_password=$_POST['emp_password'];

			$sql = "SELECT * FROM employee where emp_name='$emp_username' and emp_password='$emp_password'";
			$result = mysqli_query($conn, $sql);
		
			if (mysqli_num_rows($result) > 0) {
				$_SESSION["user"] = $emp_username;
				header("Location: backend/querie_generate.php");
				// output data of each row
				while($row = mysqli_fetch_assoc($result)) {
				/*
				Redirect to next page.
				*/
				}
			} 
			else {
				$data=array('success' => false, 'message' =>'Login Failed try Again');
				echo '<script> jsfunction(); </script>';
				
			}
		}
	?>

	<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
	   <div class="row">  
			<div class="col-lg-4 col-sm-4 col-xs-4"> </div>
				<div class="col-sm-4 loginclass">
					<img src="image/logo.png" class="imglogin img-responsive center-block"/> 
				
					<div class="form-group input-group input-group-lg">
						<span class="input-group-addon"><i class="fa fa-user-o" aria-hidden="true"></i></span>
						<input type="text" name="emp_username" class="form-control" id="guest_name" placeholder="User Name">
					</div>
				
					<div class="form-group input-group input-group-lg">
						<span class="input-group-addon"><i class="fa fa-unlock-alt" aria-hidden="true"></i></span>
						<input type="password" name="emp_password" class="form-control" id="password" placeholder="Password">
					</div>
					<div class="col-sm-12">
					<div class="col-sm-4">

					</div>
					<div class="col-offset-4 col-sm-4 center-block">
						<button type="submit" class="btn btn-success center-block"><span><i class="fa fa-sign-in" aria-hidden="true"></i></span> Login</button>
					</div>
					</div>
					<div id="login_failed" class="col-sm-12 alert alert-danger invisible">
						<strong>Login Failed try Again!</strong> Please check Username and Password....
					</div>
			</div> 
		</div>      
	</form>
	
	
	   
</body>

	
=======
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
>>>>>>> aaa3dc54e77c57f573724b494db71c7cde6f3850

</html>