<!DOCTYPE html>
<html>
<head>

	<title></title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/backpage.css">
    <link rel="stylesheet" href="css/table.css">
    <link rel="stylesheet" href="css/ticket.css">
    <script src="js/jquery.min.js"></script>
    <link rel="stylesheet" href="fonts/css/font-awesome.min.css">
	
    <style>
        table, th, td {
            border: 1px solid black !important ;
            }
    </style>    

    <body>
        
            <div class="main">
                
              
                
                
                
                    
            <div class="first col-sm-6 "> 
                        <div class="container">
                            
                                <table class="table" id="querytable">
                                        <thead>
                                                <tr>
                                                        <th>Ticket No</th>
                                                        <th>Query</th>
                                                        <th>Admin Name</th>
                                                        <th>Date/Time</th>
                                                        <th> </th>
                                                </tr>
                                        </thead>
                                
                                    
  
                                </table>
        
                            </div>
           </div>    
                             
        
                
                <div class="second col-sm-6" >  
                        
                            
                                  
                    <div class="second_upper"   >
                      
                        <div class="ticketview">
        
        <div class="ticketheader"> <span id="querytitle"> Visa Management </span></div>
        
        
        <div class="upperhalf">
        
            <span class="tokennumber">Token Number: 1234</span>
            <span class="timestamp">Date: 28/03/2018</span>
            <br>
             <span class="timestamp">Time: 11:43 AM</span>
            <div class="clearbox"></div>
            <br>
            <span class="employeename"><b>Name : Swapnil Damkondwar (10011)</b></span>

        
        </div>
    
           
        <div class="cutouts_left"></div>
        <div class="statusdiv"> <i class="fa fa-trash-o" aria-hidden="true"></i> </div>
        <div class="cutouts_right"></div>
        
        
        <div class="lowerhalf">
        
              <br>
            <span class="employeename"><b>Assigned Person : Person One (10011)</b></span>
            <br>
             <span class="note"><b>" Current Issue Is Deleted By Admin "</b></span>
            
            <div class="ticketfooter">
            
            <span class="tokennumber">Current Date: 28/03/2018</span>
            <span class="timestamp">Current Time: 07:30 PM </span>
                
            </div>
        
        </div>
    
    </div>
                        
                    </div>
                        
                            
                            
                    <div class="second_lower "  >
                    
                       
           
                        
                        
                    </div>    
                    
                
                </div>   
                        
                </div>    
                   
            <script>
                    
                var xmlhttprequest=new XMLHttpRequest();
                
                xmlhttprequest.onreadystatechange=function(){
                    
                    if(this.readyState==4 && this.status==200){
                       var myArray=JSON.parse(this.responseText)
                       
                       
                        
                        
                     
                      
                        var table = document.getElementById("querytable");
                        
                        for(var i=0;i<myArray.length;i++){
                           
                            var myObject=myArray[i];
                             var row = table.insertRow(1);
                            
                        row.className='info';
                            
                            if(myObject.status== '1'){
                                 row.className='success';
                            }else if(myObject.status== '2'){
                                  row.className='warning';
                            }else if(myObject.status== '3') {
                                  row.className='danger';
                            }
                            
                        var cell1 = row.insertCell(0);    
                        var cell2 = row.insertCell(1);
                        var cell3 = row.insertCell(2);
                        var cell4 = row.insertCell(3);
                        var cell5 = row.insertCell(4);
                
                        cell1.innerHTML=myObject.query_id;    
                        cell2.innerHTML = myObject.request;
                        cell3.innerHTML = myObject.admin_name;
                        cell4.innerHTML = myObject.date_time;
                            
                        cell5.innerHTML = '<input type="button" class="btn btn-primary" value="Show" id='+myObject.query_id + '>';

                             
                         /*  var btn = document.createElement('input');
                            btn.type = "button";
                            btn.className = "btn btn-primary";
                              btn.id = myObject.query_id;
                            btn.value="Show";
                          btn.onclick = (function(entry) {return function() {chooseUser(entry);}});
                            cell5.appendChild(btn);
                            --!>*/
                        }
                       
                    }
                    
                }
                xmlhttprequest.open("GET","backend/query_data.php",true);
                xmlhttprequest.send();
   
            


           
                
            </script>  

    </body>

</head>