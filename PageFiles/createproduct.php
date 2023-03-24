<?php require_once '../php_action/db_connection.php' ?>
<!DOCTYPE html>
            <head>
                <title>Stock Management System</title>
                <link rel="stylesheet" href="../custom/css/dashboard.css">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
            </head>
    <body>
        <form  action="../php_action/processproduct" method="POST" enctype="multipart/form-data">
	        <h4> Add New Products</h4>
	      	<div class="form-group">
	        	<label for="productImage">Product Image:</label>				    	
				<div class="form-group">
				<img  class="default_image" src="../images/default.png"></img>
				</div>
			</div>
			<div class="form-group">
			    <label>Select Photo: </label>
				<input type="file" placeholder="ProductImage" name="productImage">
			</div>
	        </div>
	        <div class="form-group">
	        	<label for="productName" >Product Name: </label>
				<input type="text" placeholder="Product Name" name="productName" autocomplete="off">
	        </div>
	        <div class="form-group">
	        	<label for="quantity">Quantity: </label>
				<input type="text"  placeholder="Quantity" name="quantity" autocomplete="off">
	        </div>
	        <div class="form-group">
	        	<label for="rate">Rate: </label>
				<input type="text" placeholder="Rate" name="rate" autocomplete="off">
			</div>
	        <div class="form-group">
	        	<label for="brandName">Brand Name: </label>
                <div>
				<select name="brandName">
				    <option value="">~~SELECT~~</option>
				    <?php
				        $sql = "SELECT brand_id, brand_name, brand_active, brand_status FROM brands WHERE brand_status = 1 AND brand_active = 1";
						$result = $connect->query($sql);
						while($row = $result->fetch_array()) {
						echo "<option value='".$row[0]."'>".$row[1]."</option>";
							}
				    ?>
                </select>
                </div>
            </div>			
	        <div class="form-group">
	        	<label for="categoryName" >Category Name: </label>
				<div>
				<select type="text"  placeholder="Product Name" name="categoryName" >
				<option value="">~~SELECT~~</option>
				    <?php
				      	$sql = "SELECT categories_id, categories_name, categories_active, categories_status FROM categories WHERE categories_status = 1 AND categories_active = 1";
						$result = $connect->query($sql);
						while($row = $result->fetch_array()) {
						echo "<option value='".$row[0]."'>".$row[1]."</option>";
							}
				      	?>
				      </select>
				</div>
            </div>
	        <div class="form-group">
	        	<label for="productStatus">Status: </label>
                <div>
				      <select name="productStatus">
				      	<option value="">~~SELECT~~</option>
				      	<option value="1">Available</option>
				      	<option value="2">Not Available</option>
				      </select>
				</div>
            <div>
            <div>
        <button type="submit" id="register-1">Save</button>
		<button type="button"> Close</button>
		</div>
     	</form>  
    </body>
</html>