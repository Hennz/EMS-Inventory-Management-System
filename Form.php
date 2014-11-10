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
                    <th>Check Out Amount</th>
                    <th>Final Inventory Amount</th>
                </tr>
                <?php
                if (isset($_SESSION['items'])) {
                    $items = $_SESSION['items'];
                }


                $i = 0;
                $size = sizeof($items);

                
                /*
                 * 
                 * This for loop prints out the table.
                 * My jquery code will dynamically calculate the final inventory count
                 * based on what the user enters.
                 * Then once the user clicks submit, the final calculations
                 * will be sent in a query to our database.
                 */
                
                
                for ($i = 0; $i < $size; $i++) {
                    $item = $items[$i];
                    echo '<tr>';
                    echo "<td>" . $item->title . "</td>";
                    echo "<td class='currentVal'>" . $item->quantity . "</td>";
                   
                    echo "<td class='change'>" . "<button type='button' onclick = 'add($item->id)' id = 'plus' class='btn btn-primary btn-circle btn-lg'><i class='glyphicon glyphicon-plus'></i></button>" . "<input type='text' value = '0' name='db$item->id' readonly>" . "<button type='button' onclick = 'sub($item->id)' id = 'minus' class='btn btn-danger btn-circle btn-lg'><i class='glyphicon glyphicon-minus'></i></button>"."</td>";
                    echo "<td class = 'finalVal' >" . "<input type='text' value='$item->quantity' name='$item->id' readonly></td>";
                    echo '</tr>';
                }
                ?>



              
            </table>
                </br>
                ***Please note if the final inventory account is insufficient, no updates will be posted for the item(s).***
                </br>
            <div class="btn-group">             
                <input type="submit" class ="btn btn-success sub" value ="Checkout" name="display">
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