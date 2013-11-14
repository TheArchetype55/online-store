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
    	<h1>Add a Product!</h1>
    	<p>Fill out the form to add a product!</p>
        <form method="post" action="addprocess.php">
        	<div class="field">
            	<label>Product Name</label>
                <input type="text" name="name" />
            </div>
            <div class="field">
            	<label>Description</label>
                <textarea name="description"></textarea>
            </div>
            <div class="field">
            	<label>Price</label>
                <input type="text" name="price" />
            </div>         
            <input type="submit" value="Add Product"  />
        </form>
    </div>
    <?php include("_footer.php"); ?>
</div>

</body>
</html>