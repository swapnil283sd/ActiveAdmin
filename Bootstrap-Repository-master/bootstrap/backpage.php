<!DOCTYPE html>
<html>
<head>

	<title></title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/backpage.css">
    <link rel="stylesheet" href="fonts/css/font-awesome.min.css">
	

    <body>
        
            <div class="main">
                
              
                    
                    <div class="first col-sm-6 ">  
                             
                        
                <?php include ("sample.php");?>

             
                    </div>
             
             
                    <div class="second col-sm-6" >  
                        
                            
                                  
                    <div class="second_upper"   >
                                         2
                                         
                           
                            
                    </div>
                        
                            
                            
                    <div class="second_lower "  >
                        <div class="">
                            <!-- Graph Starts Here-->
                            <html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Request Submitted',     11],
          ['Request Incomplete',      2],
          ['Inprocess',  2],
          ['Completed', 22],
          
        ]);

            var options = {
                title: 'Process '
               };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
             <body >
                     <div id="piechart" style="width: 650px; height: 350px; text-align:center"></div>
             </body>
</html>
             
                        </div>    
                    </div>   
                        
                </div>    
                   
           
        </div>
        
    </body>

</head>