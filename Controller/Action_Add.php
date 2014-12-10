<?php


/*
 * Testing Sever vs. Live Server
 */
if ($_SERVER["DOCUMENT_ROOT"] == "C:/xampp/htdocs") {

    include($_SERVER["DOCUMENT_ROOT"] . '/cse-216-project/DAO/ItemDAO.php');
    include($_SERVER["DOCUMENT_ROOT"] . '/cse-216-project/Controller/Action.php');
} else if ($_SERVER["DOCUMENT_ROOT"] == "D:\\home\\site\\wwwroot") {
    include($_SERVER["DOCUMENT_ROOT"] . '\\DAO\\ItemDAO.php');
    include($_SERVER["DOCUMENT_ROOT"] . '\\Controller\\Action.php');
}

class Action_Add implements Action {
    public function execute($request) {
        $dao = new ItemDAO();
        $dao->updateCategory($request->get('title'));
    }

    

}
