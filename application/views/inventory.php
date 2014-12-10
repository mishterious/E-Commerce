<html>
<head>
	<title></title>
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

    <title>Inventory</title>

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
            <li><a href="admin_login">Orders</a></li>
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
		<table class="table table-condensed">
			<thead>
				<tr>
					<td>Picture</td>
					<td>ID</td>
					<td>Name</td>
					<td>Inventory Count</td>
					<td>Price</td>
					<td>Edit</td>
					<td>Delete</td>
				</tr>
			</thead>
			<tbody>
				<?php
                foreach($products as $product)
                { ?>
                    <tr>
                      <td><img src="<?= $product['picture1'] ?>"></a></td>
                      <td><?= $product['id'] ?></td>
                      <td><?= $product['name'] ?></td>
                      <td><?= $product['quantity'] ?></td>
                      <td><?= $product['price'] ?></td>
                      <td> 
                      	<form action="edit_product" class="form-signin" role="form" method="post">
                      		<button class="btn btn-lg btn-warning btn-block" type="submit">Edit</button> 
                        	<input type="hidden" name="product_id" value= <?= $product['id'] ?>>
                        </form>
                      </td>
                      <td>
                      	<form action="delete_product" class="form-signin" role="form" method="post"> 
                      		<button class="btn btn-lg btn-warning btn-block" type="submit">Delete</button> 
                        	<input type="hidden" name="product_id" value= <?= $product['id'] ?>>
                    	</form>
                      </td>
                   </tr>
                    <?php
                } ?>          
			</tbody>
		</table>
		<nav>
		  <ul class="pagination">
		    <li><a href="#"><span aria-hidden="true">&laquo;</span><span class="sr-only">Previous</span></a></li>
		    <li><a href="#">1</a></li>
		    <li><a href="#">2</a></li>
		    <li><a href="#">3</a></li>
		    <li><a href="#">4</a></li>
		    <li><a href="#">5</a></li>
		    <li><a href="#"><span aria-hidden="true">&raquo;</span><span class="sr-only">Next</span></a></li>
		  </ul>
		</nav>
	</div>
</body>
</html>
