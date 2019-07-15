<html>
<head>
        
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {
    height: 100%;
    color: darkslategray;
    line-height: 1.8;
    background-color: white;
        }
    .bgimg-1 {
    background-image: url('https://hdqwalls.com/wallpapers/audi-pic.jpg');
    min-height: 400px;
        background-attachment: scroll;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
}    
        .w3-wide {letter-spacing: 10px;}
        tr:hover {background-color:#c2c2a3;cursor: pointer;}
         th{
    padding: 10px;
    text-align: center;
    border-bottom: 1px solid #ddd;
     font-weight: bold;
}
   

table {
    text-align: center;

     border: 1px solid black;
   /* border-collapse: collapse;*/
    width: 50%;
}
    
    #table-4 #r1 {color: white;
        background-color: gray;}

    #head1 { 
        text-align: center;
background-color: gainsboro;
font-family: arial, sans-serif;
font-weight: bold;
margin-top: 0px;
        margin-bottom: 1px;}
 th,td {
    padding: 10px;
    text-align: center;
    border-bottom: 1px solid #ddd;
     font-weight: bold;
}
    td {
  font-size: 24px;
}
    
tr:hover {background-color:#c2c2a3;}
</style>
</head>
<body>
    <div class="bgimg-1 w3-display-container w3-opacity-min" style="width: 100%">
    </div>
    <center><h1 id='head1' > CAR DETAILS </h1></center>
<?php
    include("config.php");
    session_start();
      $link=connecttodb();
 echo"<center>";
       $y="CALL `getLogs`();";
    $result=$link->query($y);
    if($result->num_rows>0){
       echo "<br><br>";
        echo "<table id='table-4' border='1'>";
        echo "<tr id ='r1'><td><strong>VEHICLE ID</strong></td><td><strong>RECEIVED_DATE</strong></td>";
        while($row=$result->fetch_assoc())
        {
           /*echo "FOOTWEAR ID: ".$row["fid"]." "."MANUFACTURER NUMBER: ".$row["mnumber"]." "."FOOTWEAR COST: ".$row["fcost"]." "."FOOTWEAR AVAILABILITY:  ".$row["fstock"];*/
            
            echo"<tr><td>{$row["Vehicle_id"]}</td><td>{$row["recv_date"]}</td>";
            
        }
         
        echo"</table>";
        
    } 
 
   
    
?>
   <footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
  <a href="index1.html" class="w3-button w3-light-grey"><i class="fa fa-check-circle w3-margin-right"></i>Done</a>
        </footer>
    </body>
</html>
    
    
    