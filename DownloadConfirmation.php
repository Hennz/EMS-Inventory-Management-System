
<?php

session_start();

if (!empty($_SESSION['title'])) {
    $title = $_SESSION['title'];
    $quantity = $_SESSION['quantity'];
    $filename = "excelreport.csv";
    $contents = "Item,Quantity\n";
    header('Content-type: application/ms-excel');
    header('Content-Disposition: attachment; filename=' . $filename);

    $i = 0;

    for ($i = 0; $i < sizeof($title); $i++) {
        $contents.= "$title[$i]" . "," . $quantity[$i] . "\n";
    }

    echo $contents;


    /*
      $filename ="excelreport1.csv";
      $contents = "testdata1 \t testdata2 \t testdata3 \t \n";
      header('Content-type: application/ms-excel');
      header('Content-Disposition: attachment; filename='.$filename);
      echo $contents;
     */
}
?>


<?php

unset($_SESSION['title']);
unset($_SESSION['quantity']);
?>
