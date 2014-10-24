<!--Created the Action LOGIN class. - Wellesley Arreza-->



<?php
session_start();

include 'Action.php';
include 'InventoryDAO.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Action_Login implements Action {

    public function execute($request) {
//        $dao = new loginDAO();
        $dao = new InventoryDAO();
        //check if login is valid
        
        // if not do not redirect to main.php
        
        if($dao->checkPasswd($request->get("UserID"),$request->get("Password"))){
         $dao = new InventoryDAO();     
        $_SESSION['items'] = $dao->getList();
        
        header("Location: Form.php");  
           
        }
        else{
          header("Location: login.html"); 
        }
       
    }

}


?>
