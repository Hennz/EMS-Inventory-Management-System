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
?>
<html>
    
    
    <body>
        Download will start..
    </body>
</html>
<?php
unset($_SESSION['title']);
unset($_SESSION['quantity']);

?>
