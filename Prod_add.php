<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="product list" content="product Add">
    <title> Product Add</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<script src="typeswitch.js"></script>

<div>
       <h2 class="addproduct"> <strong>Product Add</strong> </h2>
</div>

    <div>
    <button onclick="location.href='index.php'" id="cancel-product-btn" >Cancel</button>
    </div>
     <hr>
    <br>
<div class="form">
<form method="post" name="form" action="Add_prod.php">
<label>SKU</label>
<input type="text" id="sku" name='sku'>
<br>
<label>Name</label>
<input type="text" id="name" name='name'>
<br>
<label>Price ($)</label>
<input type="text" id="price" name='price'>
<br>
<label>Type Switcher</label>
<select id="productType" name="product" onChange="prodType(this.value);">
    <option>Type Switcher</option>
    <option> DVD </option>
    <option> Book</option>
    <option> Furniture</option>
</select>

<div class="productType" id="DVD">
<label>Size (MB)</label>
<input type="text" id="size"name='size'>
<p class="info"><strong>*</strong>Please provide size in Mega Bytes (MB)</p>
</div>

<div class="productType" id ="Book">
    <label>Weight (KG)</label>
    <input type="text" id="weight" name='weight'>
    <p class="info"><strong>*</strong>Please provide weight in Kilo grams (KG)</p>
</div>

<div class="productType" id="furniture">
    <label>Height (CM)</label>
    <input type="text" id="height" name='height'>  <br>
    <label>Width (CM)</label>
    <input type="text" id="width" name='width'> <br>
    <label>Length (CM)</label>
    <input type="text" id="length" name='length'>
    <p class="info"><strong>*</strong>Please provide dimension in HxWxL format. </p>
</div>

<button type="submit" id="save-product-btn" name="submit" value="Submit">Save</button>

</form>
</div> <br>
<hr>
<footer class="footer">
    <p>Scandiweb Test assignment</p>
</footer>
</body>

</html>
