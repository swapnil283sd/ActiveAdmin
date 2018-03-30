<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<head>

    <title>Login Page</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/login.js"></script>
    <link rel="stylesheet" href="fonts/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand|Roboto" rel="stylesheet">
    <script type="text/javascript" src="js/datepicker.js"></script>
    <link rel="stylesheet" href="css/datepickerstyle.css" />
	<link rel="stylesheet" href="css/semantic.min.css"/>
    <script src="js/semantic.min.js"></script>

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
				header("Location: getrequest.html");
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

	<div class="alert alert-danger">
			<strong>Login Failed try Again!</strong> Please check Username and Password....
	</div>
	
    <div class="topimageclass">
		<img src="image/topimage.png" style="width: 400px;height: 280px;" />
    </div>
	
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
	
        <div class="logindiv card">
            <div class="imgclass">
                <img src="image/logo.png" />
            </div>
            <hr><br>
            <div class="form-group">
                <label for="usr">User Name:</label>
                <input type="text" name="emp_username" class="form-control">
            </div>
			<div class="form-group">
                <label for="usr">Password</label>
                <input type="password" name="emp_password" class="form-control">
            </div>
			</br>
			<div class="center aligned column">
 				<div class="row">
					<div class="col-sm-4 "></div>
					<div class="col-sm-4 ">
						<button class="middle blue ui labeled icon button" type="submit"><i class="signup icon"></i>Login</button>
					</div>
					<div class="col-sm-4 "></div>
				</div>
			</div>
		</div>
	</form>
</body>
</html>
