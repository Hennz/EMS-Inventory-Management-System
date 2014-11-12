<!--Created the check out class. - Chris Barry-->

<?php
session_start();

include 'Action.php';
include 'InventoryDAO.php';


class Action_CheckOut implements Action {

    public function execute($request) {
		//$dao = new loginDAO();
        $dao = new InventoryDAO();
        //check if login is valid
           
        $_SESSION['selectedItems'] = $dao->getSelectedItems($request->get("toModify"));

        header("Location: CartOut.php");  
    }
}
?>
