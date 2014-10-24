<!DOCTYPE html>
<!--
Jonathan Chang [prototype table using bootstrap] [styling of page and adding column and button]

To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.ssss
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
            <link href="./bootstrap-3.2.0-dist/css/bootstrap.min.css" rel="stylesheet">
            <!-- Latest compiled and minified CSS -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

            <!-- Optional theme -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

            <!-- Latest compiled and minified JavaScript -->
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>




        </head>
        <body>

            <div class="header">

            </div>

            <div class="sidebar">


            </div>


            <table class="table table-bordered">
                <tr class="active">
                    <th>Item</th>
                    <th>Quantity</th>
                    <th>Check</th>
                    <th>Amount</th>
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
                    echo "<td>" . $item->quantity . "</td>";
                    echo "<td>" . "<input type='checkbox' name$item->id'></td>";
                    echo "<td>" . "<input type='text' name$item->id'></td>";
                    echo '</tr>';
                }
                ?>




            </table>
            <div class="btn-group">
                <input type="button" class="btn btn-primary" value="Checkin">
                <input type="button" class ="btn btn-success" value ="Checkout">
            </div>
            </br>
            <h3>Email Inventory Manager:</h3>
            <form method="get" action='index.php' class="form-signin" role="form">
                <input type="submit" class="btn btn-warning" value="Email Manager" name="Email">
            </form>
        </body>
    </html>
    <?php
} else {

    echo "Woops.";
}
unset($_SESSION['items']);
exit;
?>