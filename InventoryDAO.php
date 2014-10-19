


<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
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
    
     
   
public function update($title, $quantity)
{
    $con = $this->getDBConnection();
    //connect
   
    //insert task
    $result = $con->query("INSERT INTO truck(Title,Quantity) 
        VALUES('$title', $quantity);");
    
}
/*
public function delete($id)
{
    $con = $this->getDBConnection();
    $val=(int)$id;
    $result = $con->query("DELETE FROM TASK "
            . "WHERE ID=$id");
    
}
*/

}

?>