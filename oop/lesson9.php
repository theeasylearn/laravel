<?php 
    require_once("BaseClass.php");
    $product = new BaseClass();
    $product->name = "IPhone";
    $product->price = 125000;
    $product->quantity = 10;
    echo $product;
    echo "<br/> product Name " . $product->name;
    echo "<br/> Price " . $product->price;
    echo "<br/> Quantity " . $product->quantity;
?>