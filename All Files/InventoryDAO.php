<!--
Created the class that handles database connections. - Wellesley Arreza


-->


<?php
include 'Item.php';

class InventoryDAO {

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
        $lst = array(); // array of new items
        $con = $this->getDBConnection();

        $result = $con->query("SELECT ItemID,Title,Quantity,Description FROM item ORDER BY ItemID");
        $con->close();
        $i = 0;

        // loop and create new Objects. Store attributes in array of objects
        while ($row = $result->fetch_row()) {
            // create new item object.
            $rec = new Item($row[0], $row[1], $row[2], $row[3]);
            $lst[$i++] = $rec;
        }
        return $lst;
    }
    

    public function getSelectedItems($itemList) {
        $lst = array();
        $con = $this->getDBConnection();

        $rowIds = $itemList[0];
        for ($i = 1; $i < sizeof($itemList); $i++) {
            $rowIds .= ("," . $itemList[$i]);
        }

        $result = $con->query("SELECT * FROM item WHERE ItemID IN ($rowIds);");
        $con->close();

        $j = 0;
        while ($row = $result->fetch_row()) {
            // new item
            $rec = new Item($row[0], $row[3], $row[2], $row[1]);
            $lst[$j++] = $rec;
        }

        // return array of items.
        return $lst;
    }

    public function checkPasswd($user, $password) {
        // put code to access database
        $con = $this->getDBConnection();
        if (empty($user) || empty($password)) {
            return false;
        }
        $result = $con->query("SELECT COUNT(UserID) FROM user where
             Username='$user' AND Password = '$password'");
        $con->close();
        $value = "0";
        while ($row = $result->fetch_row()) {
            $value = $row[0];
            if (((int) $value) == 1) {
                return true;
            }
        }
        return false;
    }

    
    
    public function update($id, $quantity) {
        
        // check if empty.
        if(empty($id) || empty($quantity)){
            return false;
        }
        
        $idLength=sizeof($id);
        $quantityLength=sizeof($quantity);
        
        // check if lengths are the same.
        if($idLength!=$quantityLength){
            return false;
        }
        
        
        // check if we recevied integers.
        
        $con = $this->getDBConnection();
        
        
        for ($i = 0; $i < sizeof($id); $i++) {
            
            $conv1=ctype_digit($id[$i]);
            $conv2=ctype_digit($quantity[$i]);
        
            if(!$conv1 || !$conv2){
            return false;
            }
            
            
            $con->query("UPDATE item SET Quantity='$quantity[$i]' WHERE ItemID='$id[$i]'; ");
        }
        $con->close();
        return true;
    }

    
    
    
    public function updateCategory($title) {
        $con = $this->getDBConnection();

        $con->query("INSERT INTO item(Title,Quantity,Description)"
                . " VALUES('$title','0','No Description'); ");

        $con->close();
    }

   

}
?>