<?php
session_start();

include 'Action.php';
include 'AccountDAO.php';

class Action_SignUp implements Action {
    
    public function execute($request) {
        
        $dao = new AccountDAO();
        
        $lastname = $request->get("LastName");
        $firstname = $request->get("FirstName");
        $address = $request->get("Address");
        $city = $request->get("City");
        $password = $request->get("Password");
        $username = $request->get("Username");
        $email = $request->get("EmailAddress");
        $state = $request->get("State");
        
        $dao->addAccount($lastname,$firstname,$address,$city,$password,$username,$email,$state);
        header("Location: login.html"); 
    }
    
}
    
?>