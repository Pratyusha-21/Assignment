<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Assignment</title>
    <link rel="stylesheet" href="stylehome.css">
    
</head>
<body>
<?php
    session_start();
    if ($_SESSION["flag"]!=1){
      header('location:loginh.php');
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
                <li><a href="form4h.php">Add Phone Number</a></li>
                <li><a href="form5h.php">Add Email Id </a></li>  
                <li><a href="form6h.php">Download Form</a></li>
                <li><a href="login.html">Login</a></li>  
                
    </ul>
</center>
   
</body>
</html>