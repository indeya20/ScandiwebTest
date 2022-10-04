<?php

include_once("classes/Crud.php");
include_once("Validator.php");

$crud = new Crud();
$validator = new Validator();

if(isset($_POST['Submit'])) {
	$sku = $crud->escape_string($_POST['sku']);	
	$name = $crud->escape_string($_POST['name']);
	$price = $crud->escape_string($_POST['price']);
	$size = $crud->escape_string($_POST['size']);
	$weight = $crud->escape_string($_POST['weight']);
	$height = $crud->escape_string($_POST['height']);
	$width = $crud->escape_string($_POST['width']);
	$length = $crud->escape_string($_POST['length']);
	$dimension = $height . " x " . $width . " x " . $length;
		
	$msg = $validator->check_empty($_POST, array('sku', 'name', 'price'));

	
	
	if($msg != null) {
		echo $msg;		
	}	
	else { 
		$result = $crud->execute("INSERT INTO product (sku,name,price,size,weight,dimension) VALUES('$sku','$name','$price','$size','$weight','$dimension')");
		
		echo "<div class='alert alert-success text-center' role='alert'>Product added successfully.<br><br><a class='btn btn-info' href='index.php'>View Product List</a></div>";
	}
}

?>