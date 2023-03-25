
<!DOCTYPE html>
<head>
	<title>Stock Management System</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- <link rel="stylesheet" href="../custom/css/dashboard.css"> -->
</head>
    <body>
        <div class="form-popup" id="myForm">
	    <form  class="form-container" action="" method="POST" enctype="multipart/form-data">
	        <div class="heading"> Add New Brand</div>
	            <div class="form-group">
	                <label for="brandName">Brand Name: </label>
				    <input type="text" placeholder="Brand Name" name="brandName" autocomplete="off">
			    </div>
	            <div class="form-group">
	        	    <label for="brandStatus">Status: </label>        
				    <select name="brandStatus">
				        <option value="">~~SELECT~~</option>
				        <option value="1">Available</option>
				        <option value="2">Not Available</option>
				    </select>
			    </div>
                <div>
				    <button type="submit" id="save">Save</button>
				    <button type="button" id="close" onclick="closeForm()">Close</button>
			    </div>
         </form>
        </div>
    <!-- java script -->
            <script>
            function openForm() {
            document.getElementById("myForm").style.display = "block";
            }
            function closeForm() {
            document.getElementById("myForm").style.display = "none";
            }
            </script>
    </body>
</html>