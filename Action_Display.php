<!--Created the Action DISPLAY class. - Wellesley Arreza-->


<?php
session_start();

include 'Action.php';
include 'InventoryDAO.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Action_Display implements Action {

    public function execute($request) {
        
        
        $dao = new InventoryDAO();     
        $_SESSION['items'] = $dao->getList();
        
        header("Location: Inventory.php"); 
    }

}


?>
