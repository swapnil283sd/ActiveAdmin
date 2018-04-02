<!DOCTYPE html>
<html>
<head>

	<title>Login Page</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
	   <link rel="stylesheet" href="css/table.css">
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/table.js"></script>
        <link rel="stylesheet" href="fonts/css/font-awesome.min.css">
	    <link href="https://fonts.googleapis.com/css?family=Quicksand|Roboto" rel="stylesheet">
    <style>
        table, th, td {
            border: 1px solid black;
            }
    </style>
</head>
    <body>


 <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th>Column 1</th>
                        <th>Column 2</th>
                        <th>Column 3</th>
                        <th>Column 4</th>
                    </tr>
                </thead>
            <tbody>
                          
                    <tr class="info">
                        <td>Request Submitted </td>
                        <td></td>
                        <td></td>
                        <td>
                            <button type="button" class="btn btn-warning">Edit</button>
                            <button type="button" class="btn btn-success">Complete</button>
                            <button type="button" class="btn btn-primary">Show</button>
                        </td>
                        
                    </tr>
                
                    <tr class="warning">
                        <td>Inprocess</td>
                        <td></td>
                        <td></td>
                        <td>
                            <button type="button" class="btn btn-warning">Edit</button>
                            <button type="button" class="btn btn-success">Complete</button>
                            <button type="button" class="btn btn-primary">Show</button>
                        </td>
                    </tr>
                
                    <tr class="success">
                        <td>Completed</td>
                        <td></td>
                        <td></td>
                        <td>
                            <button type="button" class="btn btn-warning">Edit</button>
                            <button type="button" class="btn btn-success">Complete</button>
                            <button type="button" class="btn btn-primary">Show</button>
                        </td>
                    </tr>
                
                    <tr class="danger">
                        <td>Request Incomplete</td>
                        <td></td>
                        <td></td>
                        <td>
                            <button type="button" class="btn btn-warning">Edit</button>
                            <button type="button" class="btn btn-success">Complete</button>
                            <button type="button" class="btn btn-primary">Show</button>
                        </td>
                    </tr>
     
                </tbody>
  
            </table>
        
        </div>

</body>
</html>