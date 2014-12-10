<?php
session_start();

if ($_SERVER["DOCUMENT_ROOT"] == "C:/xampp/htdocs") {

    include($_SERVER["DOCUMENT_ROOT"] . '/cse-216-project/DAO/ItemDAO.php');
    include($_SERVER["DOCUMENT_ROOT"] . '/cse-216-project/Controller/Action.php');
} else if ($_SERVER["DOCUMENT_ROOT"] == "D:\\home\\site\\wwwroot") {
    include($_SERVER["DOCUMENT_ROOT"] . '\\DAO\\ItemDAO.php');
    include($_SERVER["DOCUMENT_ROOT"] . '\\Controller\\Action.php');
}

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
