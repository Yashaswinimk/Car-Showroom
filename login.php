<?php
session_start();
?>
<html>
<head>
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .bgimg{
           background-image: url("http://www.wallpapermaiden.com/wallpaper/3432/download/1920x1080/audi-r8-v10-blue-long-road-desert-cars.jpg");
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: scroll;
            background-size: cover;
        }
        
        body,h2,form,center{
            color: palegoldenrod;
            font font-family: "Lato",sans-serif;
            height: 69%;
            line-height: 1.8;
        }
        .wide
        {
            letter-spacing: 10px;
        }
        button{
            background-color: darkslategrey;
            color: azure;
            padding: 10px 50px;
        }
        button:hover{ background-color: dimgray; cursor: default;}
        input[type=text]{
            padding: 5px 20px;
            border: 4px solid grey;
        }
        input[type=password]{
            padding: 5px 20px;
            border: 4px solid grey;
        }
    </style>
    </head>
    <body><div class="bgimg w3-container"><h2 class="wide w3-center"><b>LOGIN</b></h2>
    <form method="post">
        <input type="text" name="uname" placeholder="Enter Username" required><br><br>
         <input type="password" name="pass" placeholder="Enter Password" required><br><br>
            <button name="login">LOGIN</button>
        </form></div>
    </body>
<?php
    if(isset($_POST['login']))
    {
        $user="";$psw="";
    $user=$_POST['uname'];
        $psw=$_POST['pass'];
        
        if($psw=="admin123" && $user=="admin")
        {
            header('Location: index1.html');
        }
        echo $psw;
    }
    ?>

</html>