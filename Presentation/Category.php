<!DOCTYPE html>
<html>
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
            <title></title>
            <!-- Bootstrap core CSS -->
            <!-- Latest compiled and minified JavaScript -->
             <script src="./js/jquery-1.8.1.min.js"></script>
            <script src="./js/jquery-ui-1.8.23.custom.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
            <!--import style sheets Jon Test-->
            <link href="css/styles.css" rel ="stylesheet">
            
            <link href="../bootstrap-3.2.0-dist/css/bootstrap.min.css" rel="stylesheet">
            <!-- Latest compiled and minified CSS -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

            <!-- Optional theme -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
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
            
            
           Title: <input type="text" id="titleInput" name="itemTitle">
           </br>
           </br>
           <input type="button" class="btn btn-success addInventory" name="add" value="Submit">
           
          
           <?php
        
        
        $server="";
       if($_SERVER["DOCUMENT_ROOT"]=="C:/xampp/htdocs"){
           
           $localhost="C:/xampp/htdocs";
           $server="/cse-216-project/";
            echo "<script src=".$server."/js/addCategory.js'></script>";
       }
       else if($_SERVER["DOCUMENT_ROOT"]=="D:\\home\\site\\wwwroot"){
           $server="";
            echo "<script src=".$server."\\js\\addCategory.js'></script>";
       }
        
        
        ?>
</body>
        
        
        
</html>

