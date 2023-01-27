<?php
   session_start();
   unset($_SESSION["email"]);
   unset($_SESSION["pswd"]);
   unset($_SESSION["flag"]);
   header('Location: login.html');
?>