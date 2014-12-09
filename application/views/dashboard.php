
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


    </style>
  </head>
  <body>
    <script src="https:www//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <nav id = "topbar" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
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
                <td>Status</td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>100</td>
                <td>Chris</td>
                <td>9/6/14</td>
                <td>499 Fairchild Dr. Mountain View, CA 95123</td>
                <td>$192.00</td>
                <td>
                  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu2">
                    <li role="presentation" class="dropdown-header">Dropdown header</li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Order in Process</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Cancelled</a></li>
                  </ul>
                </td>
              </tr>
              <tr>
                <td>92</td>
                <td>Christos</td>
                <td>9/6/14</td>
                <td>499 Fairchild Dr. Mountain View, CA 95123</td>
                <td>$192.00</td>
                <td>Status</td>
              </tr>
              <tr>
                <td>267</td>
                <td>Adam</td>
                <td>9/6/14</td>
                <td>499 Fairchild Dr. Mountain View, CA 95123</td>
                <td>$192.00</td>
                <td>Status</td>
              </tr>
              <tr>
                <td>12</td>
                <td>Mish</td>
                <td>9/6/14</td>
                <td>499 Fairchild Dr. Mountain View, CA 95123</td>
                <td>$192.00</td>
                <td>Status</td>
              </tr>
            </tbody>
          </table>    
      </div>
          <!-- Bootstrap core JavaScript
          ================================================== -->
          <!-- Placed at the end of the document so the pages load faster -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    </div>
  </body>
</html>