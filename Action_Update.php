<?php
session_start();

include 'Action.php';
include 'InventoryDAO.php';

class Action_Update implements Action {

    public function execute($request) {    
        $dao = new InventoryDAO();            
        $dao->update($request->get('id'),$request->get('quantity'));           
        //$_SESSION['items'] = $dao->getList();
        //header("Location: Inventory.php");   
    }

}


?>
