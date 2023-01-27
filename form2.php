<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    image{
    height: 200px;
    width: 200px;
    padding: 8px;
    border: 3px solid black;
    }
    </style>
<body>

  <div class="container" style="text-align:center;">
  <?php


 if (isset($_POST['submit'])) {                          //checks whether the variable is set or not

    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    

    $obj = new Base($firstname, $lastname);
    $obj->displayname();
    $obj->displayImage();
   

 }


 class Base
 {

    public $firstname,$lastname;

    
    function __construct($firstname, $lastname){
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }

     
    function displayname()                          //Function will display name of the user
    {
        $firstname = $this->firstname;
        $lastname = $this->lastname;
        
        if (empty($firstname) || empty($lastname)) {
            echo "Field should not be empty";
        } elseif ((is_numeric($firstname) == 1) || (is_numeric($lastname) == 1)) {
            echo "number is not allowed";
        } elseif (preg_match('~[0-9]+~', $firstname) || (preg_match('~[0-9]+~', $lastname))) {
            echo "name should not contain numbers";
        } else {
            echo "<h1>Hello! $firstname $lastname</h1> <br>";
        }
    }

    function displayImage(){                           //displays image that is uploaded by the user
        $oldpath = $_FILES['image']['tmp_name'];
        $target_dir = "images/";
        $target_new_name = "dp.jpg";
        $target = $target_dir . $target_new_name;
        move_uploaded_file($oldpath, $target);
        echo '<img src="images/dp.jpg" alt="">';
    }
 } 
    ?>
    </div>
</body>
</html>