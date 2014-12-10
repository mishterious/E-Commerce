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

    <title>Signin Template for Bootstrap</title>

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

    </style>
  </head>

  <body>
    <h1 id= "title">authentically ethnic</h1>
    <div id='wrapper'>
        <div id='background'>

    <div id='signIn' class="container">

      <form class="form-signin" role="form">
        <h2 class="form-signin-heading">login to your customer account</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">sign in</button>
      </form>

<!--       <div id='signIn' class="container"> -->
        <br>
        <form action="admin_login" class="form-signin" role="form" method="post">
          <!-- <h2 class="form-signin-heading">admin access</h2> -->
          <label for="inputEmail" class="sr-only">Email address</label>
          <input type="email" name = "email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
          <label for="inputPassword" class="sr-only">Password</label>
          <input type="password" name = "password" id="inputPassword" class="form-control" placeholder="Password" required>
          <div class="checkbox">
            <label>
              <input type="checkbox" value="remember-me"> Remember me
            </label>
          </div>
          <button class="btn btn-lg btn-warning btn-block" type="submit">admin access</button>
        </form>
    </div>

    <!-- </div> --> <!-- /container -->
</div>


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>