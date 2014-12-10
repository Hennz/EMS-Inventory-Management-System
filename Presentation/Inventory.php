<!DOCTYPE html>
<!--
Email feature will be implemented soon. - Wellesley Arreza
Jonathan Chang [prototype table using bootstrap] [styling of page and adding column and button]

-->

<?php
if ($_SERVER["DOCUMENT_ROOT"] == "C:/xampp/htdocs") {
    include($_SERVER["DOCUMENT_ROOT"] . '/cse-216-project/DAO/ItemDAO.php');
} else if ($_SERVER["DOCUMENT_ROOT"] == "D:\\home\\site\\wwwroot") {
    include($_SERVER["DOCUMENT_ROOT"] . '\\DAO\\ItemDAO.php');
}
session_start();

if (isset($_SESSION['items'])) {
    ?>
    <html>
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
            <title></title>
            <!-- Bootstrap core CSS -->
            <!-- Latest compiled and minified JavaScript -->
             <script src="../js/jquery-1.8.1.min.js"></script>
            <script src="../js/jquery-ui-1.8.23.custom.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
            <!--import style sheets Jon Test-->
            <link href="../css/styles.css" rel ="stylesheet">
            
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
            
            
             <input type="button" id='download' class="download btn btn-danger" name="download" value ="Download Spreadsheet">
            </br>
            </br>
            
            <?php
            $server="";
       if($_SERVER["DOCUMENT_ROOT"]=="C:/xampp/htdocs"){
           
           $localhost="C:/xampp/htdocs";
           $server="/cse-216-project/";
       }
       else if($_SERVER["DOCUMENT_ROOT"]=="D:\\home\\site\\wwwroot"){
           $server="\\";
       }
            
            $String="<form method='get' action='" . $server . "index.php' class='form-signin' role='form'>";
            echo $String;
            ?>
            
          <!--   <form method="get" action='index.php' class="form-signin" role="form">-->
                 
                 
            <table class="table table-bordered">
                <tr class="active">
                    <th>Item</th>
                    <th>Quantity</th>
                    <th>Modify Item</th>
                </tr>
                <?php
                if (isset($_SESSION['items'])) {
                    $items = $_SESSION['items'];
                }
                $i = 0;
                $size = sizeof($items);
            
                for ($i = 0; $i < $size; $i++) {
                    $item = $items[$i];
                    echo '<tr>';
                    echo "<td>" . $item->title . "</td>";
                    echo "<td class='currentVal'>" . $item->quantity . "</td>";
                    echo "<td> <input type='checkbox' name='toModify[]' value='". $item->id . "'> Include item</button> </td>";
                    echo '</tr>';
                }
                ?>
            </table>
                </br>
               
            <div class="btn-group">             
                <input type="submit" class ="btn btn-success " name="CheckIn" value = "Check-In">
		<input type="submit" class ="btn btn-success " name="CheckOut" value = "Check-Out">
                
      
            </div>
		
            </form>
            </br>
           
            
        </body>
         
         <?php
        
        
        $server="";
       if($_SERVER["DOCUMENT_ROOT"]=="C:/xampp/htdocs"){
           
           $localhost="C:/xampp/htdocs";
           $server="/cse-216-project/";
           echo "<script src='".$server."/js/ajax.js'></script>";
       echo "<script src='".$server."/js/ajax2.js'></script>";
       echo "<script src='".$server."/js/scripts.js'></script>";
       }
       else if($_SERVER["DOCUMENT_ROOT"]=="D:\\home\\site\\wwwroot"){
           $server="";
           echo "<script src='".$server."\\js\\ajax.js'></script>";
       echo "<script src='".$server."\\js\\ajax2.js'></script>";
       echo "<script src='".$server."\\js\\scripts.js'></script>";
       }
        ?>
    </html>
    <?php
} else {
    echo "Woops.";
}



unset($_SESSION['items']);
exit;
?>