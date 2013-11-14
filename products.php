<?php include("_first.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/main.css" type="text/css" rel="stylesheet"/>
<title>My Online Store</title>
</head>

<body>
<div id="page">
	<?php include("_header.php"); ?>
	<div id="main">
    	<h1>Our Products!</h1>
    	<?php 
		include("_connect.php");
		//retrieve products from db
		$products_query = mysql_query("SELECT * FROM products");
		while($product = mysql_fetch_array($products_query)){
		?>
		<div class="product">
        	<h2><?php echo $product['name']; ?></h2>
            <p><?php echo $product['description']; ?></p>
            <p><?php echo $product['price']; ?></p>
        </div>
        <?php
		}
		?>
    </div>
    <?php include("_footer.php"); ?>
</div>

</body>
</html>