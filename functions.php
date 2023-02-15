<?php
require("DBC.php");
require("products.php");
require("cart1.php");
$db = new DBC();
$product=new Product($db);
$Cart=new Cart($db);
$product_shuffle = $product->getData();
?>