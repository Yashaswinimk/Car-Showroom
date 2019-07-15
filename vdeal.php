<html>
<head>
<title>AUDI</title>
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
        td{
            padding: 10px;
            text-align: center;
            border-bottom:1px solid #ddd;
        }
    </style>
    </head>
    <body>
    <div class="bgimg-1 w3-display-container w3-opacity-min" style="width: 100%">
        <div class="w3-display-bottommiddle"><span class="w3-xxlarge w3-text-white w3-wide">DEALS</span></div>
        </div>
        <?php
    include("config.php");
    session_start();
      $link=connecttodb();
 
       $y="SELECT * FROM `vdeal`;";
    $result=$link->query($y);
    if($result->num_rows>0){
       echo "<br><br>";
        echo "<center>";
        echo "<table border='1'>";
        echo "<tr id ='r1'><th><strong>Customer first name</strong></th><th><strong>Customer Last name</strong></th><th><strong>Vehicle Name</strong></th><th><strong>Salesperson First Name</strong></th><th><strong>Salesperson Last Name</strong></th><th><strong>Sale Price</strong></th><th><strong>Registration Date</strong></th><th><strong>Delivery Date</strong></th><th><strong>Location</strong></th></tr>";
        while($row=$result->fetch_assoc())
        {
            echo"<tr><td>{$row["c_fname"]}</td><td>{$row["c_lname"]}</td><td>{$row["v_name"]}</td><td>{$row["sfname"]}</td><td>{$row["slname"]}</td><td>{$row["sale_price"]}</td><td>{$row["reg_date"]}</td><td>{$row["del_date"]}</td><td>{$row["loc_name"]}</td></tr>";
            
        }
        echo"</table>";
        echo "</center>";
    } 

    
?>
        <footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
  <a href="index1.html" class="w3-button w3-light-grey"><i class="fa fa-check-circle w3-margin-right"></i>Done</a>
        </footer>
    </body>
</html>