<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php include 'InventoryDAO.php'; ?>
<?php
session_start();

if (isset($_SESSION['items'])) {
    ?>
    <html>
        <head>
            <meta charset="UTF-8">
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

            <div class="jumbotron">
                <table class="table table-bordered ">
                    <th>Item</th>
                    <th>Quantity</th>
                    <th>Check</th>
                    <th>Amount</th>
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
                        echo "<td>" . "<input type='input' name$item->id'></td>";
                        echo '</tr>';
                    }
                    ?>




                </table>
            </div>
            <input type="button" class="btn btn-primary" value="Checkout">
            </br>
            Email Inventory Manager:
            <form method="get" action='index.php' class="form-signin" role="form">
                <input type="submit" class="btn btn-primary" value="Email_Manager" name="Email">
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