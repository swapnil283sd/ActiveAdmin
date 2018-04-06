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
		
				document.getElementById("login_failed").style.visibility = "hidden";
		}

		function jfunction(){
		
				document.getElementById("login_failed").style.visibility = "visible";
		}		
	</script>

</head>

<body>
	

	<div id="login_failed" class="alert alert-danger">
			<strong >Login Failed try Again!</strong> Please check Username and Password....
	</div>
	
    <div class="topimageclass" style="width: 378px;height: 230px;" >
        <img src="image/topimage.png" style="width: 378px;"  />
    </div>

	
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST" >
	        <div class="logindiv card" style="height: 385px;">
            <div class="imgclass">
                <img src="image/logo.png" />
            </div>
            <br>
                <center> <span style="color:#3D9CD0"><u> <i class="fa fa-warning"></i> For Administrative Use.</u></span></center> 
            <br>    
            <div class="form-group input-group input-group-lg">
                <span class="input-group-addon">
                        <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                    </span>
                <input type="text" placeholder="Username" name="admin_username" id="Username"  required class="form-control">
            </div>
			<div class="form-group input-group input-group-lg">
                <span class="input-group-addon">
                        <i class="fa fa-unlock" aria-hidden="true"></i>
                    </span>
                <input type="password" placeholder="Password" name="admin_password" required class="form-control">
                
            </div>
			<br>
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

		if(!empty($_POST)){
			include_once 'backend/dbconnect.php';
			$admin_username=$_POST['admin_username'];
			$admin_password=$_POST['admin_password'];

			$sql = "SELECT * FROM admin where admin_name='$admin_username' and admin_password='$admin_password'";
			$result = mysqli_query($conn, $sql);
		
			if (mysqli_num_rows($result) > 0) {
                
                $row = mysqli_fetch_assoc($result);
                
				$_SESSION["user"] = $admin_username;
              
                $data=array('success' => true, 'message' =>'Successful','adminid'=>$row['admin_id']);
        
                  $_SESSION["adminid"] = $data['adminid'];
                
                
				header("Location: adminactivity.php");
				// output data of each row
				
			} 
			else {
				$data=array('success' => false, 'message' =>'Login Failed try Again');
				echo '<script> jfunction(); </script>';
				
			}
		}
	?>
</body>
</html>
