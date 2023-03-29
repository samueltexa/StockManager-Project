<?php require_once "../Footer_Header/topheaders.php"; ?>
<!DOCTYPE html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../sourcefolder/css/dashboard.css">
</head>
    <body>
    <div class="home">
		  <a class="homelink"href="dashboard.php">Home</a>
		  <hi class="homelink">/ Brand</hi>
	</div>
	<div class = "manageproduct">
		    <img class="icon"src="../images/icons/manageproduct.png">Manage Brand</img>
		    <button class="open-button" onclick="openForm()"><img class="icon"src="../images/icons/add.png"></img>Add Brand</button>
	    </div>
        <div class="form-popup" id="myForm">
	    <form  class="form-container" action="../php_action/processbrand" method="POST" enctype="multipart/form-data">
	        <div class="heading"> Add New Brand</div>
	            <div class="form-group">
	                <label for="brandName">Brand Name: </label>
				    <input type="text" placeholder="Brand Name" name="brandName" autocomplete="off" required>
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
            <div class="mytable">
                <table>
                <?php require "../php_action/fetchBrand.php";?>
                </table>
            </div>
    </body>
</html>
		


