<?php
include 'Action.php';
include 'InventoryDAO.php';
class Connect extends PHPUnit_Framework_TestCase  {
    
  public function testConnectionIsValid()
  {
      
    $dao= new InventoryDAO();
    
    
    // Lets test invalid usernames and passwords.
    $invalidUser="12345";
    $invalidPass="Jchang";
    
    
    $this->assertNotNull($invalidUser);
    $this->assertNotNull($invalidPass);
    $this->assertTrue($dao->checkPasswd($invalidUser, $invalidPass) == false);
    
    $invalidUser="cb";
    $invalidPass="Jynx";
    
    $this->assertNotNull($invalidUser);
    $this->assertNotNull($invalidPass);
    $this->assertTrue($dao->checkPasswd($invalidUser, $invalidPass) == false);
    
    $invalidUser="Goggles";
    $invalidPass="DoubleJynx";
    $this->assertNotNull($invalidUser);
    $this->assertNotNull($invalidPass);
    $this->assertTrue($dao->checkPasswd($invalidUser, $invalidPass) == false);
    
    
    // lets test the valid user name and password
    $username="Bob";
    $password="password";
    $this->assertNotNull($username);
    $this->assertNotNull($password);
    $this->assertTrue($dao->checkPasswd($username, $password) !== false);
  }
    
    
    
}


?>

