<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Assignment</title>
    
</head>
<body>
<?php
    session_start();
    if($_SESSION["flag"]!=1){
      header('location:login.html');
    }
    ?>
    <h1>
       <u>PHP ASSIGNMENTS</u> 
    </h1>
    <p>
       <center>
        <font face="Arial" Size="5" color="blue"><b> CLICK ON THE FORM LINK YOU WANT TO FILL :</b></font> 
    </p>
    <ul>
                <li><a href="form1h.php">Add Name</a></li>
                <li><a href="form2h.php">Add Image</a> </li>
                <li><a href="form3h.php">Add Marks</a> </li>
                <li><a href="form4h.php">Add Phone Number</a>  </li>
                <li><a href="form5h.php">Add Email Id </a></li>  
                <li><a href="form6h.php">Download Form</a>  </li>
                <li><a href="login.html">Login</a></li>  
                
    </ul>
</center>
    <style>
        body{
            background-image: url('https://img.freepik.com/free-vector/vibrant-summer-ombre-background-vector_53876-105765.jpg?w=2000.jpg');
            background-repeat: no-repeat;
            background-size: 100% 100%;
            background-attachment: fixed;
            
        }
        h1{
            text-align: center;
            font-family: CURSIVE;
            font-size: 50px;
        }
        p{  
            font-size: 30px;
            font-family:TIMES NEW ROMAN;
            color: rgb(73, 3, 53);
        }
        ul li{
            padding: 8px 16px;
            border: 2px solid black;
            width: 25%;
        }
        a:link {
          color: blue;
          background-color: transparent;
          text-decoration: none;
          font-size: 30px;
}
    </style>
</body>
</html>