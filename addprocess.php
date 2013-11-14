<?php 
//Retrieving Post Data From Form
$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];
include("_connect.php");
//Add Product To Table
mysql_query("
INSERT INTO products
(name,description,price)
VALUES
('$name','$description','$price')
") or die(mysql_error());
//Notify user
?>
Product added, <a href="add.php">click here to return</a>