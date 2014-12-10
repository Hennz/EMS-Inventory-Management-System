<!--
Created the class that handles database connections. - Wellesley Arreza


-->


<?php

/*
 * Testing Sever vs. Live Server
 */
if ($_SERVER["DOCUMENT_ROOT"] == "C:/xampp/htdocs") {

    include($_SERVER["DOCUMENT_ROOT"] . '/cse-216-project/Business_Objects/Item.php');
} else if ($_SERVER["DOCUMENT_ROOT"] == "D:\\home\\site\\wwwroot") {
    include($_SERVER["DOCUMENT_ROOT"] . '\\Business_Objects\\Item.php');
}


class ItemDAO {

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

   

    
    
    public function update($item) {
        
        
        $con = $this->getDBConnection();
        
        
        for ($i = 0; $i < sizeof($item); $i++) {
            
            
              // check if empty.
        if(empty($item[$i]->id) || empty($item[$i]->quantity)){
            $con->close();
            return false;
        }
        
        $idLength=sizeof($item[$i]->id);
        $quantityLength=sizeof($item[$i]->quantity);
        
        // check if lengths are the same.
        if($idLength!=$quantityLength){
            $con->close();
            return false;
        }
        
        
        // check if we recevied integers.
       
            
            $conv1=ctype_digit($item[$i]->id);
            $conv2=ctype_digit($item[$i]->quantity);
        
            if(!$conv1 || !$conv2){
                $con->close();
            return false;
            }
            
            
            $con->query("UPDATE item " . "SET Quantity='". 
                    $item[$i]->quantity . "' WHERE ItemID='". $item[$i]->id . "'; ");
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