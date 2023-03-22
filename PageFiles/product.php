<?php require_once '../php_action/db_connection.php' ?>
<?php require_once "../Footer_Header/topheaders.php"; ?>
		<ol>
		  <li><a href="dashboard.php">Home</a></li>
		  <li>Product</li>
		</ol>


				<div>Manage Product</div>

			<button>Add Product </button>
				<table>
					<thead>
						<tr>
							<th style="width:10%;">Photo</th>
							<th>Product Name</th>
							<th>Rate</th>
							<th>Quantity</th>
							<th>Brand</th>
							<th>Category</th>
							<th>Status</th>
							<th style="width:15%;">Options</th>
						</tr>
					</thead>
				</table>

<form  action="php_action/createProduct.php" method="POST" enctype="multipart/form-data">
	        <h4> Add Product</h4>


	      	<div class="form-group">
	        	<label for="productImage">Product Image: </label>
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

	        <div class="form-group">
	        	<label for="categoryName" >Category Name: </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-8">
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


	        <div class="form-group">
	        	<label for="productStatus">Status: </label>
				      <select name="productStatus">
				      	<option value="">~~SELECT~~</option>
				      	<option value="1">Available</option>
				      	<option value="2">Not Available</option>
				      </select>
				    </div>

	      <div>
	        <button type="button"> Close</button>
	        <button type="submit" data-loading-text="Loading..." autocomplete="off"> Save Changes</button>
	      </div>
     	</form>


<!-- edit categories brand -->
<div tabindex="-1" role="dialog">
	      <h4>Edit Product</h4>
	      </div>
	      <div style="max-height:450px; overflow:auto;">
					<span class="sr-only">Loading...</span>
	      	</div>

				  <ul role="tablist">
				    <li role="presentation" <a href="#photo" aria-controls="home">Photo</a></li>
				    <li role="presentation"><a href="#productInfo">Product Info</a></li>
				  </ul>

				  <div class="tab-content">


				    	<form action="php_action/editProductImage.php" method="POST" enctype="multipart/form-data">
				    	<br />

				    	<div class="form-group">
			        	<label for="editProductImage">Product Image: </label>
						    <img src=""  style="width:250px; height:250px;" />
						    </div>
			        </div>

			      	<div class="form-group">
			        	<label for="editProductImage">Select Photo: </label>
							   <input type="file" placeholder="Product Name" name="editProductImage" style="width:auto;"/>
						    </div>

			        <div>
				        <button type="button"> Close</button>
							 </div>
				      </form>

				    	<form action="php_action/editProduct.php" method="POST">
				    	<br />

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


<script src="../custom/js/poduct.js"></script>

<!-- <?php require_once 'includes/footer.php'; ?> -->
