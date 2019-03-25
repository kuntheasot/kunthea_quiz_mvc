<?php 
include_once "conncection.php";
foreach ( $data as $item ):
?>
  <p><?php echo $item['firstname']; ?></p> 
  <p><?php echo $item['lastname']; ?></p>
  <p><?php echo $item['age']; ?></p>
  
  <?php endforeach ?>

