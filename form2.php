<?php
    include 'func.php';
    $objprint = new Base();
    if (isset($_POST['image'])) {
       $objprint->getImage($_POST['image']);
    }
    $name = $objprint->getName();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <img src="images/dp.jpg" alt="">
    <h1><?php echo $name ?></h1>
</body>
</html>



