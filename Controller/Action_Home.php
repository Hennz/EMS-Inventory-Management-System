<!--Created the Action LOGIN class. - Wellesley Arreza-->



<?php
session_start();

if ($_SERVER["DOCUMENT_ROOT"] == "C:/xampp/htdocs") {

    include($_SERVER["DOCUMENT_ROOT"] . '/cse-216-project/DAO/AccountDAO.php');
    include($_SERVER["DOCUMENT_ROOT"] . '/cse-216-project/DAO/ItemDAO.php');
    include($_SERVER["DOCUMENT_ROOT"] . '/cse-216-project/Controller/Action.php');
} else if ($_SERVER["DOCUMENT_ROOT"] == "D:\\home\\site\\wwwroot") {
    include($_SERVER["DOCUMENT_ROOT"] . '\\DAO\\AccountDAO.php');
    include($_SERVER["DOCUMENT_ROOT"] . '\\DAO\\ItemDAO.php');
    include($_SERVER["DOCUMENT_ROOT"] . '\\Controller\\Action.php');
}


class Action_Home implements Action {

    public function execute($request) {

        
        
        $dao = new AccountDAO();
        $dao2= new ItemDAO();
        
        
        if($dao->checkPasswd($request->get("UserID"),$request->get("Password"))){
           
        $_SESSION['items'] = $dao2->getList();
        
   
        
        $server = "";
            if ($_SERVER["DOCUMENT_ROOT"] == "C:/xampp/htdocs") {

                $localhost = "C:/xampp/htdocs";
                $server = "/cse-216-project/Presentation/";
            } else if ($_SERVER["DOCUMENT_ROOT"] == "D:\\home\\site\\wwwroot") {
                $server = "\\Presentation\\";
            }


            header("Location:".$server."home.php");  
           
        }
        else{
          header("Location:".$server."login.php"); 
        }
        
        
       
    }

}


?>
