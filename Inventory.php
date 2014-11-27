<!DOCTYPE html>
<!--
Email feature will be implemented soon. - Wellesley Arreza
Jonathan Chang [prototype table using bootstrap] [styling of page and adding column and button]

-->
<?php include 'InventoryDAO.php'; ?>
<?php
session_start();

if (isset($_SESSION['title'])){
        $title = $_SESSION['title'];
        $quantity = $_SESSION['quantity'];
        $filename = "EMSInventory.xls";
        $contents = "";
        
        for($i=0; $i < 1; $i++){
            $contents . $title[$i] . '\t' . $quantity[$i] . '\t' . '\n';
        }
        header('Content-type: application/ms-excel');
        header('Content-Disposition: attachment; filename=' . $filename);
        echo $contents;
}
if (isset($_SESSION['items'])) {
    ?>
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
            
            <link href="./bootstrap-3.2.0-dist/css/bootstrap.min.css" rel="stylesheet">
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
					<li class="active"><a href="home.html">Home</a>
					</li>
					<li><a href="mailto:joc216@lehigh.edu">Contact</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<!-- end Nav Bar --> 
            
            

            <form method="get" action='index.php' class="form-signin" role="form">
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
                ***Please note if the final inventory account is insufficient, no updates will be posted for the item(s).***
                </br>
            <div class="btn-group">             
                <input type="submit" class ="btn btn-success " name="CheckIn" value = "Check-In">
		<input type="submit" class ="btn btn-success " name="CheckOut" value = "Check-Out">
                </br>
      
            </div>
		
            </form>
            </br>
            <input type="button" id='download' class="download" name="download" value ="Download Spreadsheet">
            
        </body>
         <script src="./js/ajax.js"></script>
         <script src="./js/ajax2.js"></script>
         <script src="./js/scripts.js"></script>
    </html>
    <?php
} else {
    echo "Woops.";
}




unset($_SESSION['title']);
unset($_SESSION['quantity']);
//unset($_SESSION['items']);
exit;
?>