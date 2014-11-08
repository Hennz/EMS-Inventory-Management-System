<!--Created the Action LOGIN class. - Wellesley Arreza-->



<?php
session_start();

include 'Action.php';
include 'InventoryDAO.php';


class Action_Login implements Action {

    public function execute($request) {
//        $dao = new loginDAO();
        $dao = new InventoryDAO();
        //check if login is valid
        
        // if not do not redirect to main.php
        
        if($dao->checkPasswd($request->get("UserID"),$request->get("Password"))){
           
        $_SESSION['items'] = $dao->getList();
        
        // implement session accounts array
        
        
        header("Location: Form.php");  
           
        }
        else{
          header("Location: login.html"); 
        }
       
    }

}


?>
