<?php
 session_start();
include("config.php");
 $link=connecttodb();
?>
<html>
    <head>
        
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
        input[type=textarea], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
           
input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
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
        td{
            padding: 10px;
            text-align: center;
            border-bottom:1px solid #ddd;
        }
        
        
</style></head>
    <body>
        <div class="bgimg-1 w3-display-container w3-opacity-min" style="width: 100%; ">
    </div>
        <center><h2>DEALS</h2></center>
    <CENTER><u>Please fill in the following details with care</u></CENTER>
<br><br>
<form method="post">

Customer Unique ID: <input type="text" name="cid" required/><br><br>
Vehicle Model Number: <input type="text" name="vid" required/><br><br>
Salesperson ID:<input type="text" name="sid" required/><br><br>
Sale Price:  <input type="text" name="salprice" required/><br><br>
    Registration Date:   <input type="date" name="regidate" required/><br><br>
Delivery Date:   <input type="date" name="delidate" required/><br><br>
   
  <input type="submit" name="click">
   </form>
    
</body>
    <?php
   
    if(isset($_POST['click']))
{
 $vehid="";$salid="";$sprice="";$deldate="";$regdate="";$custid="";$check="";
    $custid=$_POST['cid'];    
    $vehid=$_POST['vid'];
    $salid=$_POST['sid'];
    $sprice=$_POST['salprice'];
    $regdate=$_POST['regidate'];    
    $deldate=$_POST['delidate'];
    //$sql1="SELECT price from vehicle where vid='$vehid'";
        //$check=mysqli_query($link,$sql1);
        //if($check==$sprice){
        
$sql="INSERT INTO Deal 

VALUES

('$custid','$vehid','$salid','$sprice','$regdate','$deldate')";


if (!mysqli_query($link,$sql))

  {

  die('Error: ' . mysql_error());

  }
$msg="1 record added";
echo "<script type='text/javascript'>alert('$msg');</script>";
}
    
   /* else{
        $msg1="1 record not added";
echo "<script type='text/javascript'>alert('$msg1');</script>";
    } */
?>
    <footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
  <a href="index1.html" class="w3-button w3-light-grey"><i class="fa fa-check-circle w3-margin-right"></i>Done</a>
        </footer>
    </html>