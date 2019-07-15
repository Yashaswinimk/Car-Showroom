<?php
session_start();
include("config.php");
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
input[type=update] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=update]:hover {
    background-color: #45a049;
}
input[type=delete] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=delete]:hover {
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
         .myNavbar
         {
            
             padding: 14px 24px;
             border-radius: 0;
             border: 0;
             line-height: 1.42857143;
         }
</style>
</head>
<body >
       <div class="w3-top">
  <div class="w3-bar" id="myNavbar">
    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>
      <a href="#home" class="w3-bar-item w3-button"><i class="fa fa-pencil"></i>FILL IN THE DETAILS</a>
    <a href="#delete" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-user"></i> DELETE</a>
    <a href="#update" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-th"></i> UPDATE</a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    <a href="#home" class="w3-bar-item w3-button" onclick="toggleFunction()">FILL IN THE DETAILS</a>
    <a href="#delete" class="w3-bar-item w3-button" onclick="toggleFunction()">DELETE</a>
    <a href="#update" class="w3-bar-item w3-button" onclick="toggleFunction()">UPDATE</a>
  </div>
</div>
    <br/><br/><br/>
    <div class="bgimg-1 w3-display-container w3-opacity-min" style="width: 100%">
    </div>
    <div class="w3-content w3-container w3-padding-64" id="home">
    <h1> <CENTER>SALESPERSON INFORMATION STORAGE</CENTER></h1>
    
<form method="post">
 Unique ID:   <input type="text" name="sid" required/>
     <br><br>
First Name: <input type="text" name="sfname" required /><br><br>
Last Name:  <input type="text" name="slname" /><br><br>
Email-id:  <input type="text" name="semailid" required/><br><br>
Phone Number: <input type="text" name="sphno" required/><br><br>
     Location ID:   <select name="locid" required>
    <option value="1">Vittal Mallya Road</option>
    <option value="2">Hosur Main Road</option>
  </select><br><br>
   
       <input type="submit" name="submit" value=SUBMIT />
        </form>
     <script>
    window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
    } else {
        navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
    }
}
        </script>
    </body>
  <?php  
$link=connecttodb();
   
if(isset($_POST['submit']))
{
    if(!filter_var($_POST["semailid"],FILTER_VALIDATE_EMAIL)){
          $erm="Invalid mail format";
          echo "<script type='text/javascript'>alert('$erm');</script>";
    }
    else{ 
 $id="";$sfn="";$sln="";$lid="";$smail="";$sph="";
    $id=$_POST['sid'];
    $sfn=$_POST['sfname'];
    $sln=$_POST['slname'];
    $lid=$_POST['locid'];
    $smail=$_POST['semailid'];
    $sph=$_POST['sphno'];
        $check=mysqli_query($link,"SELECT sphno from salesperson where sphno='$sph' ");
    $checkrows=mysqli_num_rows($check);

  if($checkrows>0) {
      $msg1="Salesperson already exists";
 echo "<script type='text/javascript'>alert('$msg1');</script>";
    }
    else {  
    
    
$sql="INSERT INTO Salesperson 

VALUES

('$id','$sfn','$sln','$smail','$sph','$lid')";


if (!mysqli_query($link,$sql))

  {

  die('Error: ' . mysql_error());

  }
$msg="1 record added";
echo "<script type='text/javascript'>alert('$msg');</script>";
    }
}
}
    ?>
     <footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
  <a href="index1.html" class="w3-button w3-light-grey"><i class="fa fa-check-circle w3-margin-right"></i>Done</a>
        </footer>
    <div class="w3-content w3-container w3-padding-64" id="update">
    <h1><center>SALESPERSON INFORMATION UPDATION</center></h1>
    <form method="post">
 Enter the sid for updating<input type="text" name="snid" required /> 
     <br><br>
First Name: <input type="text" name="nsfname" required/><br><br>
Last Name:  <input type="text" name="nslname"/><br><br>
Email-id:  <input type="text" name="nsemailid" required/><br><br>
Phone Number: <input type="text" name="nsphno" required/><br><br>
     Location ID:   <select name="nlocid" required>
    <option value="1">Vittal Mallya Road</option>
    <option value="2">Hosur Main Road</option>
  </select><br><br>
     
    <input type="update" name="update" value=UPDATE />
    </form>
   <?php 
       $link=connecttodb();
    if(isset($_POST['update'])){
        
         if(!filter_var($_POST["nsemailid"],FILTER_VALIDATE_EMAIL)){
          $erm="Invalid mail format";
          echo "<script type='text/javascript'>alert('$erm');</script>";
    }
    else{ 
        $snid="";
        $nsfname="";$nslname="";$nsemailid="";$nsphno="";
        $nlocid="";
     $snid=$_POST['snid'];
    $nsfname=$_POST['nsfname'];
    $nslname=$_POST['nslname'];
    $nlocid=$_POST['nlocid'];
    $nsemailid=$_POST['nsemailid'];
    $nsphno=$_POST['nsphno'];
    
        
        $sql1="UPDATE salesperson set sfname='$nsfname', slname='$nslname',semailid='$nsemailid',sphno='$nsphno', locid='$nlocid' where sid='$snid' ";
          if (!mysqli_query($link,$sql1))

  {

  die('Error: ' . mysql_error());

  }



$msg="1 record updated";
    echo "<script type='text/javascript'>alert('$msg');</script>";
        
    }
    
    }
        ?>
         <footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
  <a href="index1.html" class="w3-button w3-light-grey"><i class="fa fa-check-circle w3-margin-right"></i>Done</a>
        </footer>
         <div class="w3-content w3-container w3-padding-64" id="delete">
    <h1><center>SALESPERSON INFORMATION DELETION</center></h1>
    <form method="post">
        Enter the sid for deleting<input type="text" name="dsid" required /> 
     <br><br>
        <button name="delete">DELETE</button>
             </form>
             <?php 
       $link=connecttodb();
    if(isset($_POST['delete'])){
        $dsid="";
        $dsid=$_POST['dsid'];
    
 $sql2="DELETE FROM salesperson WHERE sid='$dsid'";
         if (!mysqli_query($link,$sql2))

  {

  die('Error: ' . mysql_error());

  }



$msg="1 record deleted";
    echo "<script type='text/javascript'>alert('$msg');</script>";
        
    
    
    }
             ?>
   <footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
  <a href="index1.html" class="w3-button w3-light-grey"><i class="fa fa-check-circle w3-margin-right"></i>Done</a>
        </footer>
    
</html>