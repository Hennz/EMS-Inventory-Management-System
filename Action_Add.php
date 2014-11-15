

<?php
session_start();

include 'Action.php';
include 'InventoryDAO.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Action_Add implements Action {

    public function execute($request) {    
        $dao = new InventoryDAO();            
        $dao->update($request->get('id'),$request->get('quantity'));           
        $_SESSION['items'] = $dao->getList();
        header("Location: Inventory.php");   
    }

}


?>
