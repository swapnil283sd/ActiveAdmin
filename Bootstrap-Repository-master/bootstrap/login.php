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
<<<<<<< HEAD
				document.getElementById("login_failed").style.visibility = "visible";
		}
=======
		
				document.getElementById("login_failed").style.visibility = "hidden";
		}

		function jfunction(){
		
				document.getElementById("login_failed").style.visibility = "visible";
		}		
>>>>>>> aaa3dc54e77c57f573724b494db71c7cde6f3850
	</script>

</head>

<body>
<<<<<<< HEAD
	<?php
=======
	

	<div id="login_failed" class="alert alert-danger">
			<strong >Login Failed try Again!</strong> Please check Username and Password....
	</div>
	
    <div class="topimageclass">
        <img src="image/topimage.png" style="width: 378px;height: 280px;" />
    </div>

	
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST" >
	        <div class="logindiv card">
            <div class="imgclass">
                <img src="image/logo.png" />
            </div>
            <br><br>
            <div class="form-group input-group input-group-lg">
                <span class="input-group-addon">
                        <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                    </span>
                <input type="text" placeholder="Username" name="emp_username" id="Username"  required class="form-control">
            </div>
			<div class="form-group input-group input-group-lg">
                <span class="input-group-addon">
                        <i class="fa fa-unlock" aria-hidden="true"></i>
                    </span>
                <input type="password" placeholder="Password" name="emp_password" required class="form-control">
            </div>
			</br>
			<hr class="footer">
			 <div class="row">
                    <div class="col-sm-4 ">
                    </div>
                    <div class="col-sm-4 submitbutton">
                        <button type="submit" class="btn btn-primary" style = "padding:7px"><i class="fa fa-upload" aria-hidden="true"></i> &nbsp;&nbsp;Login</button>
                    </div>
                    <div class="col-sm-4 ">
                    </div>
                </div>
			</div>
		</div>
	</form>

	<?php
	echo '<script> jsfunction(); </script>';

>>>>>>> aaa3dc54e77c57f573724b494db71c7cde6f3850
		if(!empty($_POST)){
			include_once 'backend/dbconnect.php';
			$emp_username=$_POST['emp_username'];
			$emp_password=$_POST['emp_password'];

			$sql = "SELECT * FROM employee where emp_name='$emp_username' and emp_password='$emp_password'";
			$result = mysqli_query($conn, $sql);
		
			if (mysqli_num_rows($result) > 0) {
				$_SESSION["user"] = $emp_username;
<<<<<<< HEAD
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
=======
				header("Location: getrequest.php");
				// output data of each row
				
			} 
			else {
				$data=array('success' => false, 'message' =>'Login Failed try Again');
				echo '<script> jfunction(); </script>';
>>>>>>> aaa3dc54e77c57f573724b494db71c7cde6f3850
				
			}
		}
	?>
<<<<<<< HEAD

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
=======
>>>>>>> aaa3dc54e77c57f573724b494db71c7cde6f3850
</body>
</html>
