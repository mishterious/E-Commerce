<html>
<head>
	<title>Description</title>
	<html lang="en">

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
	    	#product{
	    		margin-top: 50px;
	    	}
	    	#thatOne{
	    		width:400px;
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
          <ul class="nav navbar-nav navbar-left">  </ul>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
        	<ul class="nav navbar-nav navbar-right">
						<a class="navbar-brand" href="/index.html">Shopping Cart()</a>
        	</ul>
        </div>
      </div>
  </nav>
		<a class="navbar-brand" href="/process/index">Go Back</a>
			<div id='product' class='container'>
				<div class = "row">
					<div class="col-sm-6">
						<h2><?=$id['name']?></h2>
						<div class="col-sm-6">
							<img id='thatOne' src="<?=$id['picture1']?>"> 
						</div>
					</div>
					<div class="col-sm-6">
					<p><?=$id['description']?></p>
				<form action='/process/cart' method='post'>
					<select name="quantity">
					  <option value="1">1 ($<?=$id['price']?>) </option>
					  <option value="2">2 ($<?=$id['price']*2?>)</option>
					  <option value="3">3 ($<?=$id['price']*3?>)</option>
					  <option value="4">4 ($<?=$id['price']*4?>)</option>
					</select>
					<input type='submit' name='submit' value='Buy'>
					<input type='hidden' name='hidden' value='<?=$id['id']?>'>
				</form>
			</div>
			<div class = "col-sm-12">
				<h4>Similar Items</h4>
			<div class = "col-sm-2">
				<h5>BOXES</h5>
			</div>
			<div class = "col-sm-2">
				<h5>BOXES</h5>
			</div>
			<div class = "col-sm-2">
				<h5>BOXES</h5>
			</div>
			<div class = "col-sm-2">
				<h5>BOXES</h5>
			</div>
			<div class = "col-sm-2">
				<h5>BOXES</h5>
			</div>
			<div class = "col-sm-2">
				<h5>BOXES</h5>
			</div>
			</div>
		</div>
	</div>
</body>
</html>
