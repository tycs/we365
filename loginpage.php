<!DOCTYPE html>

<html head="en">
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="We 365 is a digital community that helps you make positive change in our world, every day of the year.">
    <meta name="author" content="Teresa Shih">
	<link rel="shortcut icon" href="http://cdn.weday.com/wp-content/themes/weday/favicon.ico">	

    <title>We 365</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
	
  </head>
<!-- NAVBAR ================================================== -->
  <body>
    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php"><img src="img/logo-blue.png" /></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="#about">About</a></li>
			<li><a href="#download">Download</a></li>
			<li><a href="#join">Join Us</a></li>
            <li><a href="#contact">Contact</a></li>
            <!-- start dropdown list -->
			<li class="dropdown"> 
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Learn More<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">The Scoop</a></li>
                <li><a href="#">The Goods</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Keeping you safe</li>
                <li><a href="#">The Nitty Gritty</a></li>
                <li><a href="#">Under13</a></li>
              </ul>
            </li><!-- /.dropdown list -->
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="loginpage.php">Login</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
	
	<div class="container marketing">
	<hr class="featurette-divider">
	
	<div class="row featurette">
	<!-- Login form --> 
		<h2>Login</h2>
		<div class="col-lg-4">
			<form action="loginpage.php" class="form-horizontal" method="post">
				<div class="form-group">
					<label>E-mail</label>
					<input type="email" class="form-control" name="email" id="email" placeholder="E-mail">
				</div>
		
				<div class="form-group">
					<label>Password</label> 
					<input type="password" class="form-control" pattern=".{6,12}" placeholder="password" name="password" id="password" required title="password must be between 6-12 characters" />
				</div>


				<div class="form-group"> 
					<input type="submit" class="btn btn-primary" name="Submit" value="Login" />
					<a href="#">forgot password?</a>
				</div>
			</form>
		</div>
	</div><!-- /.row -->
	
	<!-- process and validates the input -->
	<?php include 'validate.php' ?>
		
	<hr class="featurette-divider">
	
	<!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2014 We365 &middot; <a href="https://app.we365.com/web/#/privacy-policy">Privacy</a> &middot; <a href="https://app.we365.com/web/#/terms-and-conditions">Legal</a></p>
      </footer>

    </div><!-- /.container -->
</html>
