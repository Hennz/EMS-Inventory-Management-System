<!DOCTYPE html>
<?php
if ($_SERVER["DOCUMENT_ROOT"] == "C:/xampp/htdocs") {
    include($_SERVER["DOCUMENT_ROOT"] . '/cse-216-project/DAO/ItemDAO.php');
} else if ($_SERVER["DOCUMENT_ROOT"] == "D:\\home\\site\\wwwroot") {
    include($_SERVER["DOCUMENT_ROOT"] . '\\DAO\\ItemDAO.php');
}
session_start();
if (isset($_SESSION['selectedItems'])) {
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
             <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
            <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
         



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

          
            <table class="table table-bordered">
                <tr class="active">
                    <th>Item</th>
                    <th>Description</th>
                    <th>Quantity</th>
                    <th>Check-Out Amount</th>
                    <th>Final Amount</th>
                    
                </tr>
                <?php
                if (isset($_SESSION['selectedItems'])) {
                    $items = $_SESSION['selectedItems'];
                }

                // once again please do not embed javascript into
                // to the html. These are huge security flaws
                // that some novice programmer can take advantage of.
               
                $i = 0;
                $size = sizeof($items);     
                for ($i = 0; $i < $size; $i++) {
                    $item = $items[$i];
                    echo '<tr>';
                    echo "<td>" . $item->title . "</td>";
                    echo "<td class='currentVal'>" . $item->description . "</td>";
                    echo "<td>" . $item->quantity . "</td>";
                    echo "<td class='change'>" . "<button type='button' onclick = 'addNeg($item->id)' "
                            . "class='btn btn-default'>+ </button>" . "<input type='text' value = '0' "
                            . "name='db$item->id' id='db$item->id' readonly>" . 
                            "<button type='button' onclick = 'subNeg($item->id)' "
                            . "class='btn btn-danger'>-</button>"."</td>";
                    echo "<td class = 'finalVal' >" . "<input type='text' "
                            . "value='$item->quantity' id= '$item->id' name='$item->id' readonly></td>";
                    echo '</tr>';
                }
                ?>
                



              
            </table>
                </br>
                ***Please note if the final inventory account is insufficient, no updates will be posted for the item(s).***
                </br>
            <div class="btn-group">             
                <input type="button" class ="btn btn-success sub" value ="Check-Out" name="inventory">
            </div>
           
            </br>
           
        </body>
        
        <?php
        
        
        $server="";
       if($_SERVER["DOCUMENT_ROOT"]=="C:/xampp/htdocs"){
           
           $localhost="C:/xampp/htdocs";
           $server="/cse-216-project/";
           echo "<script src='".$server."/js/ajax.js'></script>";
       echo "<script src='".$server."/js/scripts.js'></script>";
       }
       else if($_SERVER["DOCUMENT_ROOT"]=="D:\\home\\site\\wwwroot"){
           $server="\\";
           echo "<script src='".$server."\\js\\ajax.js'></script>";
       echo "<script src='".$server."\\js\\scripts.js'></script>";
       }
        ?>
        
        
    </html>
    <?php
} else {

    echo "Woops.";
}
unset($_SESSION['selectedItems']);
unset($_SESSION['items']);
exit;
?>
