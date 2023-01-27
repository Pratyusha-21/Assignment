<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width", initial-scale="1.0">
    <title>Contact</title>
</head>
<style>

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 3px solid black;
  text-align: align;
  padding: 8px;
}

img{
    height: 200px;
    width: 200px;
    padding: 8px;
    border: 3px solid black;
}

a{
    font-size: 45px;
}

</style>
<body>
  <div class="container" style="text-align:center;">
  <?php


if (isset($_POST['submit'])) {                          //checks whether the variable is set or not

    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $english=$_POST["english"];
    $mathematics=$_POST["mathematics"];
    $science=$_POST["science"];
    $computer=$_POST["computer"];
    $number=$_POST["number"];

    $obj = new Base($firstname, $lastname);
    $obj->displayImage();
    $obj->displayname();
    $obj->displaymarks($english,$mathematics,$science,$computer);
    $obj->displayphonenumber($number);

}


class Base
{

    public $firstname,$lastname;

    
    function __construct($firstname, $lastname){
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }

     
    function displayname()                                  //Function will display name of the user
    {
        $firstname = $this->firstname;
        $lastname = $this->lastname;
        
        if (empty($firstname) || empty($lastname)) {
            echo "<p>Field should not be empty</p>";
        } elseif ((is_numeric($firstname) == 1) || (is_numeric($lastname) == 1)) {
            echo "number is not allowed";
        } elseif (preg_match('~[0-9]+~', $firstname) || (preg_match('~[0-9]+~', $lastname))) {
            echo "name should not contain numbers";
        } else {
            echo "<h1>Hello $firstname $lastname</h1> <br>";
        }
    }
    
    function displayImage(){                            //displays image that is uploaded by the user
        $oldpath = $_FILES['image']['tmp_name'];
        $target_dir = "images/";
        $target_new_name = "dp.jpg";
        $target = $target_dir . $target_new_name;
        move_uploaded_file($oldpath, $target);
        echo '<img src="images/dp.jpg" alt="">';
    }

    function displaymarks($eng,$maths,$sci,$comp){      //checks the marks taken from the user and prints them in a table
        /*$eng = $this->english;
        $maths = $this->mathematics;
        $sci = $this->science;
        $comp = $this->computer;*/
        if(($eng>=0 and $eng<=100) and ($maths>=0 and $maths<=100) and ($sci>=0 and $sci<=100) and ($comp>=0 and $comp<=100)){
            echo "<h1>MARKS</h1>";
            echo "<table>
            <tr>
               <th>SL NO.</th>
               <th>Subject</th>
               <th>Marks</th>
            </tr>
            <tr>
               <td>1</td>
               <td>English</td>
               <td>$eng</td>
            </tr>   
            <tr>
               <td>2</td>
               <td>Mathematics</td>
               <td>$maths</td>
            </tr> 
            <tr>
                 <td>3</td>
                 <td>Science</td>
                 <td>$sci</td>
            </tr> 
            <tr>
               <td>4</td>
               <td>Computer</td>
               <td>$comp</td>
            </tr>   
              

            </table>";
        }

        else{
            echo "<p>Invalid Input</p>";
        }
        
    }

    function displayphonenumber($number)                   //Checks whether it is a 2-digit number or not and prints the phone number
    {
        
        if(strlen($number)==10){
        echo "<p><a href=''> $number </a></p>";
        }
        else{
            echo "<p>Invalid Number</p>";
        }
    }
}

?>
</div>


</body>
</html>