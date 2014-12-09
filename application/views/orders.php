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

    <title>Orders</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Josefin+Slab|Raleway|Playfair+Display+SC' rel='stylesheet' type='text/css'>

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">

    *
    {
         font-family: 'Raleway', sans-serif;
         font-weight: bolder;
    }

    #signIn
    {
            /*font-family: 'Playfair Display SC', serif;*/
            /*font-family: 'Josefin Slab', serif;*/
           /* font-family: 'Raleway', sans-serif;*/
            margin-top: 100px;
            width: 400px;
          /*  background-image: url("swirl_pattern.png");
            height: 100%;*/
    }
    #wrapper
    {/*
            background-image: url("swirl_pattern.png");
            height: 100%;*/
    }
    body
    {
            background-image: url("swirl_pattern.png");
            height: 100%;
    }

    #background
    {
/*       background-color: white; */
        
    }
      #title
      {
        text-align: center; 
        font-size: 75px;
    /*  font-family: 'Raleway', sans-serif;*/
        font-family: 'Josefin Slab', serif;
    /*    background-color: #F6F6F6;
        padding-top: 5px;
        margin-bottom: 10px;
        width: 100%;
        border-style: solid;
        border-width: 1px;
        border-color: white;
        color: black;*/
      }
      #table
      {
        width: 45%;
        margin-left: 370px;
        background-color: white;
        padding: 10px;
        opacity: 0.7;
 /*       border-width: 20px;
        border-style: solid black;*/
        border-radius: 25px;
      }
      th
      {
        font-weight: 200%;
        font-size: 20px;
        text-decoration: underline;

      }

    </style>
  </head>

  <body>
    <nav class="navbar navbar-default" role="navigation">
       <div class="navbar-header">
          <a class="navbar-brand" href="#">Login</a>
       </div>
       <div>
          <ul class="nav navbar-nav">
             <li class="active"><a href="#">cart</a></li>
       </div>
    </nav>
    <h1 id= "title">authentically ethnic</h1>
    <div id='wrapper'>
      <table id="table">
        <tr>
          <th>Product</th>
          <th>Customer Last Name</th> 
          <th>Quantity</th>
          <th>Price</th>
        </tr>
        <tr>
          <td>Ceramic Bowl</td>
          <td>Jackson</td> 
          <td>94</td>
          <td>$500.00</td>
        </tr>
      </table>

    </div>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>