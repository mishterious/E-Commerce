
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Dashboard Template for Bootstrap</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">


    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>

      *{
          font-weight: bold;
      }
      #bodyelement{
        margin-top: 3%;
        background-image: url("swirl_pattern.png");
        height:100%;
      }

      #topbar{

        background-color: #494748;
      }

      #leftbar{

        background-color: #494748;
        opacity: 0.6;
        font-weight: bold;
        margin-top: 20%;
        border-radius: 10px;
      }

      body{
        height: 1000px;
      }

      #dropdown{
      position:relative;
      }


    </style>
  </head>
  <body>
    
    <nav id = "topbar" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
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
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="process/logoff">Log Off</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </nav>
    <div id = "bodyelement" class="container-fluid">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul id="leftbar" class="nav nav-sidebar">
            <li class="active"><a href="#">Overview <span class="sr-only">(current)</span></a></li>
            <li><a href="#">Inventory</a></li>
            <li><a href="#">Analytics</a></li>
            <li><a href="#">Reports</a></li>
          </ul>
        </div>
        <div class="col-sm-9  col-md-10">
          <h1 class="page-header">Dashboard</h1>
          <table class="table table-striped">
            <thead>
              <tr>
                <td>Order ID</td>
                <td>Name</td>
                <td>Date</td>
                <td>Billing Address</td>
                <td>Total</td>
                <td>Order Status</td>
                <td>Update</td>
              </tr>
            </thead>
            <tbody>
              <?php
                foreach($orders as $order)
                { ?>
                  <form action="update_status" class="form-signin" role="form" method="post">
                    <tr>
                      <td><a href="product_by_id"><?= $order['id'] ?></a></td>
                      <td><?= $order['first_name'] ?></td>
                      <td><?= $order['created_at'] ?></td>
                      <td><?= $order['bill_addr1'] ?><?= $order['bill_addr2'] ?><?= $order['bill_city'] ?><?= $order['bill_state'] ?><?= $order['bill_zip'] ?></td>
                      <td><?= $order['total'] ?></td>
                      <td> 
                        <select name="status" id="status">
                          <option value="" disabled selected>Select Order Status</option>
                          <option value="Order in Process">Order in Process</option>
                          <option value="Shipped">Shipped</option>
                          <option value="Cancelled">Cancelled</option>
                          <option value="Delivered">Delivered</option>
                        </select>
                      </td>
                      <td><button class="btn btn-lg btn-warning btn-block" type="submit">Update Order Status</button> <input type="hidden" name="order_id" value= <?= $order['id'] ?>></td>
                   </tr>
                  </form>
                    <?php
                } ?>          
<!--                   <div id = "dropdown" class="dropdown">
                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                      Status
                      <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Order In Process</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Shipped</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Cancelled</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Delivered</a></li>
                    </ul>
                  </div> --> 
            </tbody>
          </table>    
      </div>
          <!-- Bootstrap core JavaScript
          ================================================== -->
          <!-- Placed at the end of the document so the pages load faster -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    </div>
  </body>
</html>
