<!--
Created login.html - Wellesley Arreza
Jonathan Chang [login form prototype, login form styling, [navbar]
Chris Barry- added custom css
-->


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Bootstrap core CSS -->
	<link href="../bootstrap-3.2.0-dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="../css/login.css">
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>



</head>

<body>

	<!-- ADD Navbar -->

	<nav class="navbar navbar-default navbar-static-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapseNavJon">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">EMS Inventory</a>
			</div>


			<div class="collapse navbar-collapse navbar-right" id="collapseNavJon">
				<ul class="nav navbar-nav">
					<li class="active"><a href="login.php">Home</a>
					</li>
					<li><a href="about.php">About</a>
					</li>
					<li><a href="mailto:joc216@lehigh.edu">Contact</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<!-- end Nav Bar -->



	<div class="container">

		<!-- bootstrap column styling -->
		<div class="col-md-4 col-md-push-4">

                    
                    <?php
                    $server = "";
                    if ($_SERVER["DOCUMENT_ROOT"] == "C:/xampp/htdocs") {

                        $localhost = "C:/xampp/htdocs";
                        $server = "/cse-216-project/";
                    } else if ($_SERVER["DOCUMENT_ROOT"] == "D:\\home\\site\\wwwroot") {
                        $server = "D:\\home\\site\\wwwroot\\";
                    }



                    $String = "<form method='get' action='" . $server . "index.php' class='form-signin' role='form'>";
                    echo $String;
                    ?>

			<!--<form method="get" action='index.php' class="form-signin" role="form">-->
				<h2 class="form-signin-heading">Please sign in</h2>

				<!-- Name=UserID -->
				<input type="text" name="UserID" class="form-control loginField" placeholder="Username" required autofocus>

				<!-- Name=Password -->
				<input type="password" name="Password" class="form-control loginField" placeholder="Password" required>

				<label id="checkbox" class="checkbox">
					<input type="checkbox" value="remember-me">Remember me
				</label>

				<!-- Submit Button -->
				<button name='Home' class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
			</form>
                    <a href="CreateAccount.php">Create Account</a>
		</div>
		<!-- bootstrap column styling div -->


	</div>
	<!-- /container -->
</body>

</html>