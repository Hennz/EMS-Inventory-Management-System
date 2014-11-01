<!--
Created the class that handles database connections. - Wellesley Arreza


-->


<?php


include 'Item.php';

class InventoryDAO{
   
    
    private $_mysqli;
    
    function __construct() {        
    }

    function __destruct() {
    }

    private function getDBConnection() {
        if (!isset($_mysqli)) {
            $_mysqli = new mysqli("us-cdbr-azure-east2-d.cloudapp.net", "bcd4c67af90e16", "a3e7744d", "cseprojAh1e4yJuo", 3306);
            if ($_mysqli->errno) {
                echo "Unable to connect: %s" + $_mysqli->error;
                exit();
            }
        }
        
        return $_mysqli;
    }
    
    public function getList() {
        $lst = array();
        $con = $this->getDBConnection();
        
        $result = $con->query("SELECT ItemID,Title,Quantity,Description FROM item ORDER BY ItemID");
        $i = 0;
        
        // loop and create new Objects. Store attributes in array of objects
        while ($row = $result->fetch_row()) {
            $rec = new Item($row[0], $row[1], $row[2], $row[3]);
            $lst[$i++] = $rec;
        }
        
        return $lst;
    }
    
    public function checkPasswd($user,$password){
        // put code to access database
        $con = $this->getDBConnection();
         $result = $con->query("SELECT COUNT(UserID) FROM user where
             Username='$user' AND Password = '$password'");
         $value="0";
          while ($row = $result->fetch_row()) {
            $value=$row[0];
            if(   ((int)$value) == 1   ){
          return true;
          }
        }
          
          
        
        return false;
    }
    
     
   
public function update($id, $quantity)
{
    $con = $this->getDBConnection();
    //connect

    $q="";
    for($i=0; $i<sizeof($id); $i++){
    //$q . "UPDATE item SET Quantity='$quantity[$i]' WHERE id='$id[$i]'; ";
    $con->query("UPDATE item SET Quantity='$quantity[$i]' WHERE ItemID='$id[$i]'; ");
    
    }
    
    //return $result = $con->query($q);
    
}


}

?>