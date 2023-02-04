<?php
session_start();
if (isset($_POST['login'])) {
    if ($_POST["email"] == "2000pgoswami@gmail.com" and $_POST["pswd"] == "2000") {
        $_SESSION["flag"]=1;
        header('location:form4h.php');
    } else {
        header('location:loginh.php');
    }
}
?>