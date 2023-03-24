
<!DOCTYPE html>
<head>
    <title>Stock Management System</title>
</head>
<body>
</form>
	<div class="form-group">
	<label for="editProductName">Product Name: </label>
	<input type="text" placeholder="Product Name" name="editProductName" autocomplete="off">
	</div>
	<div class="form-group">
	<label for="editQuantity">Quantity: </label>
		<input type="text"  placeholder="Quantity" name="editQuantity" autocomplete="off">
		</div>
		<div class="form-group">
		<label for="editRate" >Rate: </label>
		<input type="text" placeholder="Rate" name="editRate" autocomplete="off">
		 </div>
		<div class="form-group">
		<label for="editBrandName" >Brand Name: </label>
				 <select  name="editBrandName">
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
			        <div class="form-group">
			        	<label for="editCategoryName">Category Name: </label>
						      <select type="text"  name="editCategoryName" >
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
			        <div class="form-group">
			        	<label for="editProductStatus">Status: </label>
						      <select  name="editProductStatus">
						      	<option value="">~~SELECT~~</option>
						      	<option value="1">Available</option>
						      	<option value="2">Not Available</option>
						      </select>
						    </div>
			        <div >
				        <button type="button" > Close</button>
				        <button type="submit"data-loading-text="Loading..."> Save Changes</button>
				      </div>
			        </form>
      <div>
        <p>Do you really want to remove ?</p>
      </div>
      <div>
        <button type="button"> Close</button>
        <button type="button"> Save changes</button>
      </div>
    </body>
    </html>