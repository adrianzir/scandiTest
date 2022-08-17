<?php    
    insert($connection);

function insert($connection){
    if( isset($_POST['sku'], $_POST['name_name'], $_POST['price'], $_POST['productType'] )  ){
      $sku = $_POST['sku'];
      $name = $_POST['name_name'];
      $price = $_POST['price'];
      $type = $_POST['productType'];
      $statement = "INSERT INTO products ( sku, name, price, TYPE) 
      VALUES('$sku', '$name', '$price',' $type')";
       mysqli_query($connection,$statement);
        };
      
   };

?>