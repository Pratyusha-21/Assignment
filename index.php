
<?php
 If(isset($_GET['q']))
 switch($_GET['q']) {
        case 1:
               include'form1h.php';
               break;
        case 2:
                 
                include'form2h.php';
                break;  
        case 3:
               include'form3h.php';

                break;    
        case 4:
                 
                include'form4h.php';
                break;              
        case 5:
                  
                 include'form5h.php';
                break;  
        case 6:
                
                include'form6h.php';
                break;  
        default: 
        header('location:loginh.php');

    }

 ?>

