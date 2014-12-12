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

    <link rel="icon" href="../../favicon.ico">

    <title>Signin Template for Bootstrap</title>

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
    <style type="text/css">
    	#mine{
    		margin-top: 100px;
    	}
    	#info{

    	}
    </style>
</head>
<body>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	      <div class="container-fluid">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <a class="navbar-brand" href="#">Authentically Ethnic</a>
	          <ul class="nav navbar-nav navbar-left">
	            <li><a href="#">Orders</a></li>
	            <li><a href="#">Products</a></li>
	          </ul>
	        </div>
	        <div id="navbar" class="navbar-collapse collapse">
	          <ul class="nav navbar-nav navbar-right">
	            <li><a href="#">Log Off</a></li>
	          </ul>
	          <form class="navbar-form navbar-right">
	            <input type="text" class="form-control" placeholder="Search...">
	          </form>
	        </div>
	      </div>
	    </nav>
		<div id='mine' class='container'>
			<h3>User Cart</h3>
			<table class="table table-condensed">
				<thead>
					<tr>
						<td>Item</td>
						<td>Price</td>
						<td>Quantity</td>
						<td>Total</td>
					</tr>
				</thead>
				<?php
				$cart = $this->session->userdata('cart');
				foreach($cart as $product)
				{ ?>
					<tr>
						<td><?= $product['name']?></td>
						<td>$<?= $product['price']?></td>
						<td><?= $product['quantity']?></td>
						<td>$<?= $product['total']?></td>
					</tr> <?php
				} ?>
			</table>
			<form action = "/process/index" name ="button">
				<button class="btn btn-lg btn-warning btn-block" type="submit">Continue Shopping</button>
			</form>
			<div id='info'>
				<h4>Shipping Information</h4><br>
			</div>
			<form class="form-horizontal" action='/process/cart' method='post' role="form">

			  <div class="form-group">
			    <label for="inputtext3" class="col-sm-2 control-label">First Name</label>
			    <div class="col-sm-10">
			      <input type="text" name="s_first" class="form-control" id="first_name">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="inputtext3" class="col-sm-2 control-label">Last Name</label>
			    <div class="col-sm-10">
			      <input type="text" name="s_last" class="form-control" id="inputtext3">
			    </div>
			  </div><div class="form-group">
			    <label for="inputtext3" class="col-sm-2 control-label">Address</label>
			    <div class="col-sm-10">
			      <input type="text" name="s_addr1" class="form-control" id="inputtext3">
			    </div>
			  </div><div class="form-group">
			    <label for="inputtext3" class="col-sm-2 control-label">Address 2</label>
			    <div class="col-sm-10">
			      <input type="text" name="s_addr2" class="form-control" id="inputtext3">
			    </div>
			  </div><div class="form-group">
			    <label for="inputtext3" class="col-sm-2 control-label">City</label>
			    <div class="col-sm-10">
			      <input type="text" name="s_city" class="form-control" id="inputtext3">
			    </div>
			  </div><div class="form-group">
			    <label for="inputtext3" class="col-sm-2 control-label">Zipcode</label>
			    <div class="col-sm-10">
			      <input type="text" name="s_zip" class="form-control" id="inputtext3">
			    </div>
			  </div>
    			<h4>Billing Information</h4><br>
    			  <div class="form-group">
    			    <label for="inputtext3" class="col-sm-2 control-label">First Name</label>
    			    <div class="col-sm-10">
    			      <input type="text" name="b_first" class="form-control" id="inputtext3">
    			    </div>
    			  </div>
    			  <div class="form-group">
    			    <label for="inputtext3" class="col-sm-2 control-label">Last Name</label>
    			    <div class="col-sm-10">
    			      <input type="text" name="b_last" class="form-control" id="inputtext3">
    			    </div>
    			  </div>

    			  <div class="form-group">
    			    <label for="inputtext3" class="col-sm-2 control-label">Address</label>
    			    <div class="col-sm-10">
    			      <input type="text" name="b_addr1" class="form-control" id="inputtext3">
    			    </div>
    			  </div>

    			  <div class="form-group">
    			    <label for="inputtext3" class="col-sm-2 control-label">Address 2</label>
    			    <div class="col-sm-10">
    			      <input type="text" name="b_addr2" class="form-control" id="inputtext3">
    			    </div>
    			  </div>

    			  <div class="form-group">
    			    <label for="inputtext3" class="col-sm-2 control-label">City</label>
    			    <div class="col-sm-10">
    			      <input type="text" name="b_city" class="form-control" id="inputtext3">
    			    </div>
    			  </div>

    			  <div class="form-group">
    			    <label for="inputtext3" class="col-sm-2 control-label">Zipcode</label>
    			    <div class="col-sm-10">
    			      <input type="text" name="b_zip" class="form-control" id="inputtext3">
    			    </div>
    			  </div>

    			<div class="form-group">
    			    <label for="inputtext3" class="col-sm-2 control-label">Credit Card Number</label>
    			    <div class="col-sm-10">
    			      <input type="text" name="card_number" class="form-control" id="inputtext3">
    			    </div>
    			</div>

    			<div class="form-group">
    			    <label for="inputtext3" class="col-sm-2 control-label">Security Code</label>
    			    <div class="col-sm-10">
    			      <input type="password" name="card_sec" class="form-control" id="inputtext3">
    			    </div>
    			</div>

    			<div class="form-group">
    			    <label for="inputtext3" class="col-sm-2 control-label">Expiration</label>
    			    <div class="col-sm-10">
    			      <input type="date" name="card_exp" class="form-control" id="inputtext3">
                  <button type="submit" class="btn btn-default">Sign in</button>
			    </div>
			</div>
		</form>
		<form action = "/process/buy" name ="button">
			<button class="btn btn-lg btn-warning btn-block" type="submit">Buy</button>
		</form>

</body>
</html>
