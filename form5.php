<?php
include 'func.php';
$objprint = new Base();
$name = $objprint->getName();
if(isset($_POST['image'])){
    $objprint->getImage($_POST['image']);
}
$f = $objprint->getMarks();
$number = $objprint->getPhonenumber(); 
$mail = $objprint->getMail();
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
    <table>
      <tr>
        <?php
          for ($a = 0; $a<count($f); $a+=2) {
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
    <p>Phone Number:<a href=''> <?php echo $number ?></a></p>
    <p><?php echo $mail ?></p>
  </body>
</html>
