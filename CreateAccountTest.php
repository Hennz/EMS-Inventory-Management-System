<?php
include 'Action.php';
include 'InventoryDAO.php';
class CreateAccountTest extends PHPUnit_Framework_TestCase  {
  
    private $lastname = null;
    private $firstname = null;
    private $address = null;
    private $city = null;
    private $password = null;
    private $username = null;
    private $email = null;
    private $state = null;

 
  
  public function testInsufficientData(){
      $lastname = 'Wheeler';
        $firstname = 'Joey';
        $address = '11 Asa Drive';
        $city = 'bethlehem';
        $password = 'abc';
        $username = 'Jman';
        $email = 'Jman@lehigh.edu';
        $state = null;

    $dao= new InventoryDAO();
    $this->assertNotNull($lastname);
    $this->assertNotNull($firstname);
    $this->assertNotNull($address);
    $this->assertNotNull($city);
    $this->assertNotNull($password);
    $this->assertNotNull($username);
    $this->assertNotNull($email);
    $this->assertNotNull($state);
    $this->assertTrue($dao->addAccount($lastname,$firstname,$address,$city,$password,$username,$email,$state) == false);   
    //This should fail....
    $con->close();
  }
  
  public function testAlreadyExists(){
      
      
        $lastname = 'Wheeler';
        $firstname = 'Joey';
        $address = '11 Asa Drive';
        $city = 'bethlehem';
        $password = 'abc';
        $username = 'Jman';
        $email = 'Jman@lehigh.edu';
        $state = 'PA';

    $dao= new InventoryDAO();
    $this->assertNotNull($lastname);
    $this->assertNotNull($firstname);
    $this->assertNotNull($address);
    $this->assertNotNull($city);
    $this->assertNotNull($password);
    $this->assertNotNull($username);
    $this->assertNotNull($email);
    $this->assertNotNull($state);
    $this->assertTrue($dao->addAccount($lastname,$firstname,$address,$city,$password,$username,$email,$state) == true);
    
    //This should fail....
    $this->assertTrue($dao->addAccount($lastname,$firstname,$address,$city,$password,$username,$email,$state) == false);
    $con->close();
    
    
  } 
    
  public function testCreateAccount()
  {
      
    $dao= new InventoryDAO();
    $this->assertNotNull($lastname);
    $this->assertNotNull($firstname);
    $this->assertNotNull($address);
    $this->assertNotNull($city);
    $this->assertNotNull($password);
    $this->assertNotNull($username);
    $this->assertNotNull($email);
    $this->assertNotNull($state);
    $this->assertTrue($dao->addAccount($lastname,$firstname,$address,$city,$password,$username,$email,$state) == false);
    $con->close();
  }
    
    
    
}


?>


