<?php
$filename ="excelreport.csv";
$contents = "testdata1,testdata2,testdata3\n testdata1,testdata2,testdata3\n";
header('Content-type: application/ms-excel');
header('Content-Disposition: attachment; filename='.$filename);
echo $contents;
 ?>

