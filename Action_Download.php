<?php
session_start();
include 'Action.php';

class Action_Download implements Action {

    public function execute($request) {
        $title= $request->get('title');
        $_SESSION['title'] = $request->get('title');
        $_SESSION['quantity'] = $request->get('quantity');
      
        for($i=0; $i<sizeof($title); $i++){
            echo $title[$i];
        }
    }

}
