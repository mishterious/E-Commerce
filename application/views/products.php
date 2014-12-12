
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Products</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
 			<!-- Latest compiled and minified CSS -->
 			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

 			<!-- Optional theme -->
 			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
      <link href='http://fonts.googleapis.com/css?family=Josefin+Slab|Raleway|Playfair+Display+SC' rel='stylesheet' type='text/css'>

 			<!-- Latest compiled and minified JavaScript -->
 			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

 			<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
 			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
 			<!-- Include all compiled plugins (below), or include individual files as needed -->
 			<script src="js/bootstrap.min.js"></script>
 	<style>

 	*{/*
 		font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
 	 		font-weight: 300;*/
    font-family: 'Playfair Display SC', serif;
  /*  font-family: 'Raleway', sans-serif;
    font-family: 'Josefin Slab', serif;*/
 	}

  body
  {
    background-image: url("swirl_pattern.png");
    /*  background-color: #CCFFCC;*/
  }

 	h3
 	{
 		font-size: 20px;
   /* text-outline: 2px 2px;*/
 		/*text-shadow: 2px 2px; */
 	}

 	#navbar
 	{
 		background-color: #D1D1D1;
 		margin:0,20,10,30px;
 	}

 	#wrapper
 	{
    background-image: url("swirl_pattern.png");
/* 		background-color: #B2CCFF;*/
 	}

 	.thumbnail
 	{
 		text-align: center;
 		border-style: solid;
 		border-width: 10px;
 	}
 	.row
 	{
 		padding: 15px;
 	}
 	.btn-custom
 	{

 	}

 	.row2
 	{
 		padding: 15px;
 		display: inline-block;
 		/*vertical-align: top;*/

 	}
  #fdeal
  {
    margin-top: -100px;
    font-size:40px;
    text-align: center;
  }

  #menu
  {
    width: 17%;
    height: 350px;
    border-style: solid;
    border-width: 5px;
    margin-left: 60px;
    margin-right:0px;
    margin-top: -100px;
    margin-bottom: 50px;
    border-radius: 15px;
    background-color: #F8F8F8;
    opacity: 0.7;
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

  #link{
    width: 120px;
  }

  #pic{
    width: 300px;
    height: 300px;
    max-height: 40%;
    max-width: 40%;

  }

 	</style>


  </head>
  <body>

  	<div id="wrapper">
        <nav class="navbar navbar-default" role="navigation">
           <div class="navbar-header">
              <a class="navbar-brand" href="/process/login">Login</a>
           </div>
           <div>
              <ul class="nav navbar-nav">
                 <li class="active"><a href="/process/cart">cart</a></li>
              </ul>
           </div>
        </nav>
        <h1 id= "title">authentically ethnic</h1>
        <br>
        <br>
        <div id = "menu" class="container-fluid">
          <div class="col-sm-3 col-md-2 sidebar">
            <h3>Categories</h3>
            <ul class="nav nav-sidebar">
<?php         foreach ($name as $key) {
      
?>               <li id="link"><a href="/process/send_product/<?=$key['category']?>"><?=$key['category']?></a></li>
                 
<?php          }
?>
            </ul>
          </div>
        </div>
			  <div class="container">
          <h1 id ="fdeal">Featured Deal</h1>
		  		</div>
 				</div>

<?php       foreach ($products as $key){                
?>              <div id = "pic" class="col-sm-6 col-md-4">
                          <div class="thumbnail">
                            <div class="caption">
                             <a href="/process/description/<?=$key['id']?>"><img class='thatImg' src="<?=$key['picture1']?>"></a>
                              <h3><?=$key['name']?></h3>
                            </div>
                          </div>
                        </div>  
<?php        }  
?>   
                      

  </body>
</html>
