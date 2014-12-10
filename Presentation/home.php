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
					<li class="active"><a href="home.php">Home</a>
					</li>
					<li><a href="mailto:joc216@lehigh.edu">Contact</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<!-- end Nav Bar --> 
        
        <div class="col-md-4 col-md-push-4">
            
            </br>
            
            <?php
            $server="";
       if($_SERVER["DOCUMENT_ROOT"]=="C:/xampp/htdocs"){
           
           $localhost="C:/xampp/htdocs";
           $server="/cse-216-project/";
       }
       else if($_SERVER["DOCUMENT_ROOT"]=="D:\\home\\site\\wwwroot"){
           $server="\\wwwroot\\";
       }
       
       
       
       $String="<form method='get' action='" . $server . "index.php' class='form-signin' role='form'>";
            echo $String;
            ?>
            
        <!--<form method="get" action='index.php' class="form-signin" role="form">-->
        <button name='display' class="btn btn-lg btn-primary btn-block" type="submit">Update Inventory</button>   
        </form>
             </br>
             <form action="about.php">
             <button class="btn btn-lg btn-primary btn-block" >About</button> </br>
             </form>
             
             <form action="Category.php">
             <button class="btn btn-lg btn-primary btn-block" >Add Inventory Categories</button></br>
             </form>
             <!--<button class="btn btn-lg btn-primary btn-block" >Email Staff Members</button></br>-->
             
        </div>
    
    </body>
</html>
