<?php
 $connection = mysqli_connect("localhost","root","","products_crud");
   if(!isset($connection)){
      echo 'is not connected';
   };

?>