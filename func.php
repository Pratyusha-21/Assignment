<link rel="stylesheet" href="styleoutput.css">
<?php
session_start();
class Base {
    
    /** 
    * Function to display the name of the user.
    *
    * @var firstname takes firstname as input
    * @var lastname takes lastname as input
    * @return message mixed
    *
    */
    public function getName() {
        $message = '';
        // Checks whether the variable is set or not.
        if (isset($_POST['submit'])) {
            $firstname = $_POST["firstname"];
            $lastname = $_POST["lastname"];
        
            // Checks whether the fields are filled.
            if (empty($firstname) || empty($lastname)) {
                $message = "Field should not be empty";
            } 

            // Checks whether any number input is taken.
            elseif ((is_numeric($firstname) == 1) || (is_numeric($lastname) == 1)) {
                $message = "number is not allowed";
            }

            // Checks whether name contains any number.
            elseif (preg_match('~[0-9]+~', $firstname) || (preg_match('~[0-9]+~', $lastname))) {
                $message = "name should not contain numbers";  
            }

            // Prints firstname and lastname.
            else {
                $message = "Hello ".$firstname." ".$lastname;
                $_SESSION['firstname'] = $firstname;
                $_SESSION['lastname'] = $lastname;
            }
        }
        return $message;
    }
     
    /**
     * 
     * Function to display image.
     * 
     * @var target_dir where the image will be stored.
     * @var target_new_name stores the image.
     * @var oldpath current path of the image file.
     * @var target where the image is to be stored and name of the file.
     * @param img stores the image uploaded.
     *  
     */
    public function getImage($img) {  
        
        $oldpath = $img;
        $target_dir = "images/";
        $target_new_name = "dp.jpg";
        $target = $target_dir . $target_new_name;
        move_uploaded_file($oldpath, $target);        
    }

    /**
     * 
     * Function to display marks.
     * @var data stores the subject name and marks.
     * @var col splits and stores each subject with marks at an index.
     * @var f array to store subjects and marks.
     * @var a for traversal across the array.
     * @return message mixed.
     * 
     */

    public function getMarks(){    
       
        if (isset($_POST['submit']))  {
            $data = $_POST['marks'];
            $col = explode("\n" , $data);
            $f = array();
            foreach ($col as $num) {
                $arr = explode("|" , $num);
                $f = array_merge($f , $arr);
            }
        $_SESSION['f'] = $f;
        return $f;
            
        }
    }

   /**
    * 
    *Function to check and print phone number.
    * @var number to store phone number.
    * @return number string.
    *
    */

    public function getPhonenumber() {
         
       //Checks whether the variable is set or not.
       if (isset($_POST['submit'])) {
            $number = $_POST["number"];

            //Checks whether it is a 10-digit number .
            if(strlen($number) == 10) {
                $_SESSION['number'] = $number;
                return $number;
            }
            else {
              return "Invalid Number";
            }
        }
    }

    /**
     * 
     * Function to check the validation of mail.
     * @param email to store the mail.
     * @return email mixed.
     * 
     */
    public function getMail()             
    {
        $message = '';
        if (isset($_POST['submit'])) {

            //Checks whether the variable is set or not.
            $email = $_POST["mail"];
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
            
            //Checks validation of email.
            if ($validationResult['smtp_check']) {
                $message = "Valid Email ID: ".$email;
                $_SESSION['email'] = $email;
            } 
            else {
                $message = "Invalid Email Id";
            }
        }
        return $message;
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