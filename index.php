<?php
//Database connection file included
include_once("Classes/Crud.php");

$crud = new Crud();

//Data fetched in desecnding order
$query = "SELECT * FROM product ORDER BY id DESC";
$result = $crud->getData($query);
//echo '<pre>'; print_r($result); exit;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title> Product list</title>
<meta charset="UTF-8">
<meta name= "Scandiweb" content="product-list">
<link rel="stylesheet" href="style.css">

</head>
<body>

<div class="productlist">
    <h2><strong>Product List</strong></h2>
</div>

<div>
    <button onclick="location.href='Prod_add.php'" id="add-product-btn" type="submit">ADD</button>
    <button id="delete-product-btn" class="N" type="submit">MASS DELETE</button>
</div>

<hr> <br> 

		<div class="row">
			<?php 
				foreach ($result as $key => $res) {		
				echo "<div class='col-md-4 mt-4'>";
				echo "<div class='card text-center bg-light'>
					<div class='card-body'>";
				echo "<p class='card-text'>".$res['sku']."</p>";
				echo "<p>".$res['name']."</p>";
				echo "<p>".$res['price']." $ </p>";
				if ($res['size'] !== "") {
					echo "<p> Size: ".$res['size']." MB </p>";
				} else if ($res['weight'] !== "") {
					echo "<p> Weight: ".$res['weight']." KG </p>";
				} else {
					echo "<p> Dimension: ".$res['dimension']."</p>";
				}
				
  				echo "</div></div>";				
				echo "</div>";		
			}
			?>
		</div>
	</div>
</body>
</html>

<hr>

<footer class="footer">
    <p> Scandiweb Test assignment</p>
</footer>

</body>

</html> 