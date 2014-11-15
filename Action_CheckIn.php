<!--Created the check in class. - Chris Barry-->



<?php
session_start();

include 'Action.php';
include 'InventoryDAO.php';


class Action_CheckIn implements Action {

    public function execute($request) {
        $dao = new InventoryDAO();      
        $_SESSION['selectedItems'] = $dao->getSelectedItems($request->get("toModify"));
        header("Location: CartIn.php");  

    }

}


?>
