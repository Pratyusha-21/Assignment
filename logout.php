<?php
   session_start();
   unset($_SESSION["email"]);
   unset($_SESSION["pswd"]);
   unset($_SESSION["flag"]);
   session_destroy();
   header('Location: loginh.php');

?>