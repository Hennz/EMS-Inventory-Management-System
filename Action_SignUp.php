<?php
session_start();

include 'Action.php';

class Action_SignUp implements Action {
    
    public function execute($request) {
        
        $dao = new InventoryDAO();
        $i = 0; //DUMMY VARIABLE; DELETE EVENTUALLY
        
        if($i === 0){  //DUMMY CONDITION; REAL CONDITION IS THAT WE CHECK FOR FILLED OUT FIELDS WITH A METHOD USING $dao
            //
            
            //After a successful account creation, redirect to login page.
            header("Location: login.html"); 
        }        
        else{
            header("Location: CreateAccount.html"); 
        }
        
    }
    
}
    


?>