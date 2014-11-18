<?php
include 'Action.php';
include 'InventoryDAO.php';
class LoginTest extends PHPUnit_Framework_TestCase  {
    
    private $username=null;
    private $password=null;
    private $dao= null;
    
    // We want to test for when the user does not enter enough information.
    public function testInsufficientData(){
        $username=null;
        $password=null;
        $dao = new InventoryDAO();
        $this->assertTrue($dao->checkPasswd($username, $password) == false);       
    }
    
        // We want to test for when the user enters valid account information.
    public function testValidLogin(){
    $dao = new InventoryDAO();
    $username="Bob";
    $password="password";
    $this->assertNotNull($username);
    $this->assertNotNull($password);
    $this->assertTrue($dao->checkPasswd($username, $password) !== false);
    }
    
     // We want to test for when the user enters invalid account information.
    public function testInvalidLogin(){
    $dao = new InventoryDAO();
    $username="12345";
    $password="Jchang";
    $this->assertNotNull($username);
    $this->assertNotNull($password);
    $this->assertTrue($dao->checkPasswd($username, $password) == false);
   
    
    
    
    }
       
    
}


?>

