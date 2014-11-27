<!DOCTYPE html>
<!--
Jonathan Chang
-->
<?php include 'InventoryDAO.php'; ?>
<?php
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

         <!--    <form method="get" action='index.php' class="form-signin" role="form">-->
                <table class="table table-bordered">
                    <tbody>


                        <tr class="active">
                            <th>Item</th>
                            <th>Description</th>
                            <th>Quantity</th>
                            <th>Check-In Amount</th>
                            <th>Final Amount</th>

                        </tr>


                        <?php
                       
                        if (isset($_SESSION['selectedItems'])) {
                            $items = $_SESSION['selectedItems'];
                        }
                        $i = 0;
                        $size = sizeof($items);
                        $idList = array();
                        $quantityList = array();
                        for ($i = 0; $i < $size; $i++) {
                            $item = $items[$i];
                            echo '<tr>';
                            echo "<td>" . $item->title . "</td>";
                            echo "<td class='currentVal'>" . $item->description . "</td>";
                            echo "<td>" . $item->quantity . "</td>";


                     
                            echo "<td class='change'>" . "<button type='button' "
                            . "onclick = 'add($item->id)' class='btn btn-default'>+ </button>" .
                            "<input type='text' value = '0' name='db$item->id' id='db$item->id' readonly>"
                            . "<button type='button' onclick = "
                            . "'sub($item->id)' class='btn btn-danger'>-</button>" . "</td>";

                            echo "<td class = 'finalVal' name='$item->id' >" . "<input type='text' "
                                    . "value='$item->quantity' id = '$item->id' name='$item->id' readonly></td>";
                            echo '</tr>';
                        }
                        ?>


                    </tbody>
                </table>

                <?php
               // array_push($idList, 1);
               // array_push($quantityList, '7');

                $_SESSION['idList'] = $idList;
                $_SESSION['quantityList'] = $quantityList;
                ?>  
                </br>
                ***Please note if the final inventory account is insufficient, no updates will be posted for the item(s).***
                </br>
                <div class="btn-group">             
                    <input type="button" class ="btn btn-success sub" value ="Check-In" name="add">
                </div>
          <!--  </form>-->
            </br>

        </body>
        <script src="./js/ajax.js"></script>
        <script src="./js/scripts.js"></script>
    </html>
    <?php
} else {

    echo "Woops.";
}
unset($_SESSION['selectedItems']);
unset($_SESSION['items']);
exit;
?>
