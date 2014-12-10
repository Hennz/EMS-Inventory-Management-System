<?php

if ($_SERVER["DOCUMENT_ROOT"] == "C:/xampp/htdocs") {

    include($_SERVER["DOCUMENT_ROOT"] . '/cse-216-project/DAO/ItemDAO.php');
    include($_SERVER["DOCUMENT_ROOT"] . '/cse-216-project/Controller/Action.php');
} else if ($_SERVER["DOCUMENT_ROOT"] == "D:\\home\\site\\wwwroot") {
    include($_SERVER["DOCUMENT_ROOT"] . '\\DAO\\ItemDAO.php');
    include($_SERVER["DOCUMENT_ROOT"] . '\\Controller\\Action.php');
}

class UpdateInventoryTest extends PHPUnit_Framework_TestCase {

    private $itemID = null;
    private $quantity = null;

    public function testInsufficientData() {
         $dao = new InventoryDAO();
        $this->itemID = null;
        $this->quantity = null;
       
        $this->assertTrue($dao->update($this->itemID, $this->quantity) == false);
        
        $this->itemID = array('100');
        $this->quantity = array('123','4123','1222','9999');
       
        $this->assertTrue($dao->update($this->itemID, $this->quantity) == false);
    }

    public function testInvalidInput() {
        $dao = new InventoryDAO();
        $this->itemID = array('boot');
        $this->quantity = array('ty');
        $this->assertTrue($dao->update($this->itemID, $this->quantity) == false);
        
        $this->itemID = array('joey123','11');
        $this->quantity = array('PokemonCharizard123','500');
        $this->assertTrue($dao->update($this->itemID, $this->quantity) == false);
    }

    public function testUpdateInventory() {
        $dao = new InventoryDAO();
        $this->itemID = array('1');
        $this->quantity = array('110');    
        $this->assertTrue($dao->update($this->itemID, $this->quantity) == true);
        
        $this->itemID = array('1','11');
        $this->quantity = array('60','325');    
        $this->assertTrue($dao->update($this->itemID, $this->quantity) == true);
        
    }

}
?>


