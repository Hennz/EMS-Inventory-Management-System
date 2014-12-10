<!--Created the check out class. - Chris Barry-->

<?php
session_start();

if ($_SERVER["DOCUMENT_ROOT"] == "C:/xampp/htdocs") {

    include($_SERVER["DOCUMENT_ROOT"] . '/cse-216-project/DAO/ItemDAO.php');
    include($_SERVER["DOCUMENT_ROOT"] . '/cse-216-project/Controller/Action.php');
} else if ($_SERVER["DOCUMENT_ROOT"] == "D:\\home\\site\\wwwroot") {
    include($_SERVER["DOCUMENT_ROOT"] . '\\DAO\\ItemDAO.php');
    include($_SERVER["DOCUMENT_ROOT"] . '\\Controller\\Action.php');
}


class Action_CheckOut implements Action {

    public function execute($request) {
		//$dao = new loginDAO();
        $dao = new ItemDAO();
        //check if login is valid
           
        $_SESSION['selectedItems'] = $dao->getSelectedItems($request->get("toModify"));
        
         $server = "";
            if ($_SERVER["DOCUMENT_ROOT"] == "C:/xampp/htdocs") {

                $localhost = "C:/xampp/htdocs";
                $server = "/cse-216-project/Presentation/";
            } else if ($_SERVER["DOCUMENT_ROOT"] == "D:\\home\\site\\wwwroot") {
                $server = "\\Presentation\\";
            }
            
            
        header("Location:".$server . "CartOut.php");  
    }
}
?>
