<?php
session_start();
include 'Action.php';

class Action_Download implements Action {

    public function execute($request) {
       
        $_SESSION['title'] = $request->get('title');
        $_SESSION['quantity'] = $request->get('quantity');
        
    }

}
