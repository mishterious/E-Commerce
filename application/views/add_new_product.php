<html lang="en">
	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="">
	    <meta name="author" content="">
	    <!-- Latest compiled and minified CSS -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

	    <!-- Optional theme -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">

	    <!-- Latest compiled and minified JavaScript -->
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

	    <link rel="icon" href="../../favicon.ico">

	    <title>Edit Product</title>

	    <!-- Bootstrap core CSS -->
	    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

	    <!-- Custom styles for this template -->
	    <link href="signin.css" rel="stylesheet">

	    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
	    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
	    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

	    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
		<style>

			#navbar{
			  background-color: #D1D1D1;
			  padding-right: 50px;
			}

			#topbar{
			  background-color: #D1D1D1;
			}

			#bodyelement{
			  margin-top: 3%;
			  padding-top: 70px;
			  background-image: url("swirl_pattern.png");
			  height:100%;
			  margin-left: 0px;
			  margin-right: 0px;
			  width: 100%;
			}



		</style>

	</head>
	<body>
		<nav id="topbar" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		  <div class="container-fluid">
		  	<div class="row">
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			      <a class="navbar-brand" href="/process/dashboard">Authentically Ethnic</a>
			      <ul class="nav navbar-nav navbar-left">
			        <li><a href="/process/dashboard">Dashboard</a></li>
			        <li><a href="/process/inventory">Products</a></li>
			      </ul>
			    </div>
			    <div id="navbar" class="navbar navbar-default collapse">
			      <ul class="nav navbar-nav navbar-right">
			        <li><a href="#">Log Off</a></li>
			      </ul>
			      <form class="navbar-form navbar-right">
			        <input type="text" class="form-control" placeholder="Search...">
			      </form>
			    </div>
			</div>
		  </div>
		</nav>
		<div id="bodyelement" class='container'>
			<div class="row">
			   <div class="col-sm-12 .col-sm-offset-2 col-md-12 .col-md-offset-2 sidebar">
				<form action = "add_new_product" id = "edit_product" role="form" method="post">
				  <div class="form-group">
				    <label>Product Name</label>
				    <input type="text" name ="product_name" class="form-control" id="exampleInputEmail1" placeholder="Enter name">
				  </div>
				  <div class="form-group">
				    <label>Description</label>
				    <textarea class="form-control" name="description" rows="3"></textarea>
				  </div>
				  <div class="form-group">
				    <label>Quantity in Inventory</label>
				    <input type="text" name ="quantity" class="form-control" id="exampleInputEmail1" placeholder="Enter name">
				  </div>
				  <div class="form-group">
				    <label>Price per Unit</label>
				    <input type="text" name ="price" class="form-control" id="exampleInputEmail1" placeholder="Enter name">
				  </div>
					<select>					
					  	<option value="" disabled selected>Select Order Status</option>
					  	<?php 
					  	foreach($categories as $category)
					  	{ ?>
					  	 <option value="<?= $category['category']?>"><?= $category['category'] ?></option>
					  	<?php 
					  	}  ?>
					</select>
					<div class="form-group">
					  <label for="exampleInputEmail1">Add a new category</label>
					  <input type="text" name="new_category" class="form-control" id="exampleInputEmail1" placeholder="New Category">
					</div>
					<div class="form-group">
					  <label>Images</label>
					  <input type="text" name ="picture1" class="form-control" id="exampleInputEmail1" placeholder="Add/Update Picture">					
					  <input type="text" name ="picture2" class="form-control" id="exampleInputEmail1" placeholder="Add/Update Picture">
					  <input type="text" name ="picture3" class="form-control" id="exampleInputEmail1" placeholder="Add/Update Picture">
					</div>
					<div class="checkbox">
					    <label>
					      <input type="checkbox"> Check me out
					    </label>
				  	</div>
				  	<button type="submit" name ="submit" class="btn btn-default">Submit</button>
				</form>
			  </div>
			</div>
		</div>
	</body>
</html>
