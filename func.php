<link rel="stylesheet" href="styleoutput.css">
<body>

<?php
session_start();
class Base
{
    /** 
    *
    *Function to display the name of the user.
    * @param firstname takes firstname as input
    * @param lastname takes lastname as input
    *
    */

    public function displayName()                       
    {

   //checks whether the variable is set or not.
   if (isset($_POST['submit'])) {

    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
     
    //checks whether the fields are filled.
    if (empty($firstname) || empty($lastname)) {
        ?>
           <p>Field should not be empty</p>
           <?php
    } 

    //checks whether any number input is taken.
    elseif ((is_numeric($firstname) == 1) || (is_numeric($lastname) == 1)) {
        ?>
        <p>number is not allowed</p>
        <?php
    }

    //checks whether name contains any number.
     elseif (preg_match('~[0-9]+~', $firstname) || (preg_match('~[0-9]+~', $lastname))) {
        ?>
        <p>name should not contain numbers</p>
        <?php  
    }

    //prints firstname and lastname
     else {
        ?>
        <h1>Hello!<?php echo "$firstname $lastname" ?></h1> <br>
        <?php
        $_SESSION['firstname']=$firstname;
        $_SESSION['lastname']=$lastname;

    }
   }
    }
     
    /**
     * 
     * Function to display image.
     * @var target_dir where the image will be stored.
     * @var target_new_name stores the image.
     * @var oldpath current path of the image file.
     * @var target where the image is to be stored and name of the file.
     *  
     */
    public function displayImage() {  
        
        $oldpath = $_FILES['image']['tmp_name'];
        $target_dir = "images/";
        $target_new_name = "dp.jpg";
        $target = $target_dir . $target_new_name;
        move_uploaded_file($oldpath, $target);
        ?>
        <img src="images/dp.jpg" alt="">
        <?php
        
    }


    /**
     * 
     * Function to display marks.
     * @var data stores the subject name and marks.
     * @var col splits and stores each subject with marks at an index.
     * @var f array to store subjects and marks.
     * @var a for traversal across the array.
     * 
     */

    public function displayMarks(){    
       
       ?>
        <h3>MARKS:</h3>
        <?php
        if (isset($_POST['submit']))  {
            $data = $_POST['marks'];
            $col = explode("\n" , $data);
            $f = array();
            foreach ($col as $num) {
                $arr = explode("|" , $num);
                $f = array_merge($f , $arr);
            }
            
            $_SESSION['f']=$f;
            ?>
          <table>
            <tr>
                <?php
                    for ($a = 0; $a<count($f) ; $a+=2) {
                        ?>
                            <th><?php echo"$f[$a]"; ?></th>
                            <?php
                    }
                    ?>
            </tr>
            <tr>
                <?php
                    for ($a = 1; $a<count($f) ; $a+=2) {
                        ?>
                            <td><?php echo"$f[$a]"; ?></td>
                            <?php
                        
                    }
                    ?>
            </tr>
            </table>
            <?php
            
        }
}

   /**
    * 
    *Function to check and print phone number.
    * @var number to store phone number.
    *
    */

    public function displayPhonenumber() {
         
   //checks whether the variable is set or not.
 
    if ( isset ($_POST['submit'])) {
       $number=$_POST["number"];

    //checks whether it is a 10-digit number .
    if (strlen($number)==10) {
        ?>
        <p>Phone Number:<a href=''> <?php echo $number ?></a></p>
        <?php
        $_SESSION['number']=$number;
    }
     else {
        ?>
        <p>Invalid Number</p>
        <?php
    }
   }
    }

    /**
     * 
     * Function to check the validation of mail.
     * @param email to store the mail.
     * 
     */
    public function displayMail()             
    {

    if (isset($_POST['submit'])) {
    //checks whether the variable is set or not.

    $email=$_POST["mail"];

    $curl = curl_init();
    curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.apilayer.com/email_verification/check?email=$email",
    CURLOPT_HTTPHEADER => array(
        "Content-Type: text/plain",
        "apikey: F8xJOX4jzmnKCAUtw5hqjLPu75BTGeyU"
    ),
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET"
    ));
    $response = curl_exec($curl);
    curl_close($curl);

    // Receive the data:

    $json = curl_exec($curl);
    curl_close($curl);

    // Decode JSON response:

    $validationResult = json_decode($json, true);
    
    //checks validation of email.
    if ($validationResult['smtp_check']) {
        ?>
        <p>Valid Email Id:<?php echo $email ?></p>
        <?php
        $_SESSION['email']=$email;
    } else {
        ?>
        <p>Invalid Email Id</p>
        <?php
    }
   }


    }

    /**
     * 
     * A button to download the file with the provided details.
     */
    public function download()
    {
        ?>
        <a class="btn btn-primary" href="download.php" role="button">Download File</a>
        <?php
    }
}


?>



</body>
</html>