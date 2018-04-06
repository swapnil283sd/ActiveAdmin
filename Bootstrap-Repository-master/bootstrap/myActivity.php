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
        
        
        
    </style>    

    <body>
        
        
            <div class="main">
                
              
                
                
              
                    
            <div class="first col-sm-6 "> 
                
                       
                        <div class="container">
                             <button id="fixedbutton" onclick="gotoHome()" class="btn btn-success"><i class="fa fa-home" aria-hidden="true"></i> Home</button>
                                <table class="table" id="querytable" style=" border: 1px solid black !important ;">
                                        <thead>
                                                <tr style=" border: 1px solid black !important ;">
                                                        <th style=" border: 1px solid black !important ;    width: 67px;">Ticket No</th>
                                                        <th style=" border: 1px solid black !important; text-align:center;">Query</th>
                                                        <th style=" border: 1px solid black !important; text-align:center;">Admin Name</th>
                                                        <th style=" border: 1px solid black !important; text-align:center;">Date/Time</th>
                                                        <th style="border: 1px solid black !important; text-align:center; width: 204px;"> </th>
                                                </tr>
                                        </thead>
                                
                                    
  
                                </table>
        
                            </div>
           </div>    
                             
        
                
                <div class="second col-sm-6" >  
                        
                            
                                  
                    <div class="second_upper"   >
                      
                        <div class="middle">
                                <div class="inner">
                                    <div id="printableArea">
                                     <div class="ticketview">
        
        <div class="ticketheader"> <span id="querytitle"> Your ticket is empty  </span></div>
        
        
        <div class="upperhalf">
        
            <span class="tokennumber" id="tokennumber"></span>
            <span class="timestamp" id="datestamp"></span>
            <br>
             <span class="timestamp" id="timestamp"></span>
            <div class="clearbox"></div>
    
            <span class="employeename" id="employeename"><b></b></span>

        
        </div>
    
           
        <div class="cutouts_left"></div>
        <div class="statusdiv" > <i class="" id="statusicon" aria-hidden="true"></i> </div>
        <div class="cutouts_right"></div>
        
        
        <div class="lowerhalf">
        
              <br>
            <span class="employeename" id="assignedperson"><b></b></span>
            <br>
             <span class="note" id="note"><b></b></span>
            
            <div class="ticketfooter">
            
            <span class="tokennumber" id="downloaddate"></span>
            <span class="timestamp" id="downloadtime"> </span>
                
            </div>
        
        </div>
    
                                </div>
                                    </div>
                                    <br>
                                    <button class="btn btn-success" onclick="printDiv('printableArea')"  ><i class="fa fa-print" aria-hidden="true"></i> Print / Save as PDF</button>
                        </div>
                        
                        
                        
                      
    </div>
                        
                    </div>
                        
                            
                            
                    <div class="second_lower">
                    
                        <div class="middle">
                                <div class="inner">
                                    
                                    <div class="graphicaldiv" style=" background: #ff4c4c;">
                                      <i class="fa fa-hand-o-up" aria-hidden="true"></i><br>
                                               1111  
                                            <span>Raised</span>
                                    </div>
                                    
                                    
                                    <div class="graphicaldiv" style=" background-color: #1480BF;">
                                     <i class="fa fa-cogs" aria-hidden="true"></i><br>
                                               111  
                                            <span>Inprocess</span>
                                    </div>
                                    
                                    
                                    <div class="graphicaldiv" style=" background-color: #5FB563;">
                                        <i class="fa fa-check" aria-hidden="true"></i><br>
                                               1  
                                        <span>Completed</span>
                                    </div>
                                    
                                </div>
                        </div>
                        
                    </div>    
                    
                
                </div>   
                        
                </div>    
                   
            <script>
                    
                var xmlhttprequest=new XMLHttpRequest();
                
                xmlhttprequest.onreadystatechange=function(){
                    
                    if(this.readyState==4 && this.status==200){
                       var myArray=JSON.parse(this.responseText);
                       
                       
                        
                        
                     
                      
                        var table = document.getElementById("querytable");
                        
                        for(var i=0;i<myArray.length;i++){
                           
                            var myObject=myArray[i];
                             var row = table.insertRow(1);
                            
                    
                            
                            if(myObject.status== '2'){
                                 row.className='success';
                            }else if(myObject.status== '1'){
                                  row.className='warning';
                            }else if(myObject.status== '0') {
                                  row.className='danger';
                            }else{
                                 row.className='info';
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
                            
                        cell5.innerHTML = '<input type="button" class="btn btn-primary" value="Show" id='+myObject.query_id + ' onclick="myFunction(\''+myObject.query_id+'\')"'+'>'+'&nbsp;<button class="btn btn-warning"  id='+myObject.query_id + ' onclick="calleditPage(\''+myObject.query_id+'\')"'+'><i class="fa fa-pencil" aria-hidden="true"></i></button>'+'&nbsp;<button class="btn btn-danger"  id='+myObject.query_id + ' onclick="calldeletePage(\''+myObject.query_id+'\')"'+'><i class="fa fa-trash" aria-hidden="true"></i></button>'+'&nbsp;<button class="btn btn-success"  id='+myObject.query_id + ' onclick="callclosingPage(\''+myObject.query_id+'\')"'+'><i class="fa fa-check" aria-hidden="true"></i></button>';

                        
                        }
                       
                    }
                    
                }
                xmlhttprequest.open("GET","backend/query_data.php",true);
                xmlhttprequest.send();
   
            
function myFunction(mystring) {
   
    
    var xmlhttp=new XMLHttpRequest();
    xmlhttp.onreadystatechange=function(){
        if(this.readyState==4 && this.status==200){
            
          
            var myObject=JSON.parse(this.responseText);
            
             
            document.getElementById("querytitle").innerHTML=myObject.request;
            document.getElementById("tokennumber").innerHTML="Token Number:- "+myObject.query_id;
            document.getElementById("timestamp").innerHTML="Time:- "+myObject.time;
            document.getElementById("datestamp").innerHTML="Date:- "+myObject.date;
            document.getElementById("employeename").innerHTML="Employee Name:- "+myObject.emp_name;
             document.getElementById("assignedperson").innerHTML="Assigned Person:- "+myObject.admin_Name;
             document.getElementById("downloaddate").innerHTML="Download Date:- "+myObject.current_date;
             document.getElementById("downloadtime").innerHTML="Download Time:- "+myObject.current_time;

            if(myObject.Status==0){
               
                document.getElementById("statusicon").className="fa fa-hand-o-up";
                document.getElementById("note").innerHTML="This task is Raised but not Acknoledged by Admin";    
                document.getElementById("note").style.color = "#FD4C50";    
                document.getElementById("statusicon").style.color = "#FD4C50";
               }
               else if(myObject.Status==1){
                
                    document.getElementById("statusicon").className="fa fa-cog fa-spin  fa-fw";
                    document.getElementById("note").innerHTML="This task is Inprocess";   
                    document.getElementById("note").style.color = "#1E81BB";  
                    document.getElementById("statusicon").style.color = "#1E81BB";
                
                }else if(myObject.Status==2){
                
                    document.getElementById("statusicon").className="fa fa-check";
                    document.getElementById("note").innerHTML="This task is Completed";
                    document.getElementById("note").style.color = "#62B368";
                    document.getElementById("statusicon").style.color = "#62B368";
                    document.getElementById("statusdiv").style.borderColor  = "#62B368 ";
                    
                    
                }else{
                    
                     document.getElementById("statusicon").className="fa fa-trash";
                     document.getElementById("note").innerHTML="This task is Deleted";
                     document.getElementById("note").style.color = "#FD4C50"; 
                     document.getElementById("statusicon").style.color = "#1E81BB"; 
                     document.getElementById("statusdiv").style.borderColor = "#1480BF ";
                      
                      
                }
            
        }
    }
    
    xmlhttp.open("GET","backend/request_data.php?query_id="+mystring,true);
    xmlhttp.send();
    
    
    
}
                
                function gotoHome(){
                
                     window.location='http://localhost/getrequest.php';
                }

           function calleditPage(queryId){
               
               var inputString = queryId;
               var resultString = inputString.substring(0, 2);
               var ho = resultString.localeCompare("HO");
               
                var fl = resultString.localeCompare("FL");
                var vi = resultString.localeCompare("VI");
                var lu = resultString.localeCompare("LU");
                var ta = resultString.localeCompare("TA");
                
               
               
               if(ho==0){
                    window.location='http://localhost/updatehotel.php?query_id='+queryId;
               }else if(vi==0){
                   window.location='http://localhost/updatevisa.php?query_id='+queryId;
               }else if(ta==0){
                   window.location='http://localhost/updatetaxi.php?query_id='+queryId;
               }else if(lu==0){
                   window.location='http://localhost/updatelunch.php?query_id='+queryId;
               }else if(fl==0){
                   window.location='http://localhost/updateflight.php?query_id='+queryId;
               }
               
           }
                
            function calldeletePage(queryId){
                 window.location='http://localhost/deleterequest.php?query_id='+queryId;
            }   
                
                
            function callclosingPage(queryId){
              window.location='http://localhost/closerequest.php?query_id='+queryId;
            }    
                
            function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}    
            </script>  

    </body>

</head>