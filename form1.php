<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <style>
        body {
            font-family: sans-serif;
        }
    </style>

</head>

<body>

    <div class="container" style="text-align:center;">

        <?php


        if (isset($_POST['submit'])) {                   //Checks whether the variable is set or not

            $firstname = $_POST["firstname"];
            $lastname = $_POST["lastname"];

            $obj = new Base($firstname, $lastname);
            $obj->displayname();                         //calls the function to display name 

        }


        class Base
        {

            public $firstname, $lastname;

            
            function __construct($firstname, $lastname){  //constructor to assign values for firstname and lastname
                $this->firstname = $firstname;
                $this->lastname = $lastname;
            }

             
            function displayname()                       //Function will display name of the user
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
                    echo "<h1>Hello $firstname $lastname</h1> <br>";
                }
            }
            
            
        }
        
        ?>
    </div>

</body>
</html>