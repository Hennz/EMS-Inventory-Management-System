<?php
include 'Action.php';
include 'InventoryDAO.php';
class Action_Add implements Action {
    public function execute($request) {
        $dao = new InventoryDAO();
        $dao->updateCategory($request->get('title'));
    }

    

}
