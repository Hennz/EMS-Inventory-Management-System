<?php

include 'Action.php';
include 'InventoryDAO.php';

class CreateAccountTest extends PHPUnit_Framework_TestCase {

    private $lastname = null;
    private $firstname = null;
    private $address = null;
    private $city = null;
    private $password = null;
    private $username = null;
    private $email = null;
    private $state = null;

    public function testInsufficientData() {
        $this->lastname = 'Wheeler';
        $this->firstname = 'Joey';
        $this->address = '11 Asa Drive';
        $this->city = 'bethlehem';
        $this->password = 'abc';
        $this->username = 'Jman';
        $this->email = 'Jman@lehigh.edu';
        $this->state = null;

        $dao = new InventoryDAO();
        $this->assertNotNull($this->lastname);
        $this->assertNotNull($this->firstname);
        $this->assertNotNull($this->address);
        $this->assertNotNull($this->city);
        $this->assertNotNull($this->password);
        $this->assertNotNull($this->username);
        $this->assertNotNull($this->email);
       
        $this->assertTrue($dao->addAccount($this->lastname, 
                $this->firstname, $this->address, 
                $this->city, $this->password, 
                $this->username, $this->email, $this->state) == false);
    }

    public function testAlreadyExists() {


        $this->lastname = 'Wheeler';
        $this->firstname = 'Joey';
        $this->address = '11 Asa Drive';
        $this->city = 'bethlehem';
        $this->password = 'abc';
        $this->username = 'Jman100';
        $this->email = 'Jman@lehigh.edu';
        $this->state = 'PA';

        $dao = new InventoryDAO();
        $this->assertNotNull($this->lastname);
        $this->assertNotNull($this->firstname);
        $this->assertNotNull($this->address);
        $this->assertNotNull($this->city);
        $this->assertNotNull($this->password);
        $this->assertNotNull($this->username);
        $this->assertNotNull($this->email);
        $this->assertNotNull($this->state);
        $this->assertTrue($dao->addAccount($this->lastname, 
                $this->firstname, $this->address, $this->city, $this->password, 
                $this->username, $this->email, $this->state) == true);
        //This should fail....
        $this->assertTrue($dao->addAccount($this->lastname, 
                $this->firstname, $this->address, $this->city, $this->password, 
                $this->username, $this->email, $this->state) == false);
   
         $dao->deleteAccount($this->username);
        
        
    }

    public function testCreateAccount() {
        $this->lastname = 'Wheeler';
        $this->firstname = 'Joey';
        $this->address = '11 Asa Drive';
        $this->city = 'bethlehem';
        $this->password = 'abc';
        $this->username = 'Jman50';
        $this->email = 'Jman@lehigh.edu';
        $this->state = 'PA';
        
        $dao = new InventoryDAO();
        $this->assertNotNull($this->lastname);
        $this->assertNotNull($this->firstname);
        $this->assertNotNull($this->address);
        $this->assertNotNull($this->city);
        $this->assertNotNull($this->password);
        $this->assertNotNull($this->username);
        $this->assertNotNull($this->email);
        $this->assertNotNull($this->state);
        $this->assertTrue($dao->addAccount($this->lastname, 
                $this->firstname, $this->address, $this->city, 
                $this->password, $this->username, $this->email, 
                $this->state) == true);
    
        $dao->deleteAccount($this->username);
        
        
        
    }

}
?>


