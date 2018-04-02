<?php
// Start the session
session_start();
?>

<?php
	header('Content-Type:application/json');
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		if(!empty($_POST)){
			include_once 'dbconnect.php';	  
			 $query_details=$_POST['query_details'];
			 $admin_name=$_POST['admin_name'];

			/* 
			include "md.php";

			 $foo_token=md5(getToken(20));
			 
			 date_default_timezone_set("Asia/Kolkata");
			 $date=date("y-m-d");
			 */
			 //$user =$_SESSION["user"];
			$user ='umesh';
			
            $sqle = "SELECT * FROM employee where emp_name='$user' ";
			$resulte = mysqli_query($conn, $sqle);
			
			if (mysqli_num_rows($resulte) > 0) {
			    // output data of each row
				while($row = $resulte->fetch_assoc()) {
					echo "id: " . $row["srno"]."<br>";
				}
			    $sqlr="INSERT INTO queries(emp_name,admin_name,request_details, request_date, request_time, status) values ('$user','$admin_name','$query_details',CURRENT_DATE(),CURRENT_TIME(),'0')  ";

				$result=mysqli_query($conn,$sqlr);
				 $sqle = "SELECT srno FROM queries where emp_name='umesh' AND request_date= 'CURRENT_DATE()' AND request_time= 'CURRENT_TIME()'  " ;
				 $result=mysqli_query($conn,$sqle);

			}
		}
	}
?>