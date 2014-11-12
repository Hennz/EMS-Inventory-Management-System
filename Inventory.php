<!DOCTYPE html>
<!--
Email feature will be implemented soon. - Wellesley Arreza
Jonathan Chang [prototype table using bootstrap] [styling of page and adding column and button]

-->
<?php include 'InventoryDAO.php'; ?>
<?php
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
            <div class="header">
            </div>

            <div class="sidebar">
            </div>

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
                <input type="submit" class ="btn btn-success sub" name="CheckIn">
				<input type="submit" class ="btn btn-success sub" name="CheckOut">
            </div>
		
            </form>
            </br>
           
        </body>
         <script src="./js/script.js"></script>
         <script src="./js/scripts.js"></script>
    </html>
    <?php
} else {

    echo "Woops.";
}
unset($_SESSION['items']);
exit;
?>