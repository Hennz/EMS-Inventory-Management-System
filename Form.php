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
        
        
        <table class="table">
            <th>Item</th>
            <th>Quantity</th>
            <th>Check</th>
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
                    echo '</tr>';
                  
                }
                
                
                
                
                ?>
        
     
     
     
        </table>
        <input type="button" class="btn btn-primary" value="Checkout">
        </br>
        Email Jonathan Chang:
        <form action="index.php" method="get" class="form-signin" role="form">
        <input type="button" class="btn btn-primary" value="Checkout" name="Email">
        </form>
    </body>
</html>
<?php
}

else{
    
    echo "Woops.";
   
}
 unset($_SESSION['items']);
 exit;

?>