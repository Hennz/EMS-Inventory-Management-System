<?php
session_start();

if ($_SERVER["DOCUMENT_ROOT"] == "C:/xampp/htdocs") {

    include($_SERVER["DOCUMENT_ROOT"] . '/cse-216-project/DAO/AccountDAO.php');
    include($_SERVER["DOCUMENT_ROOT"] . '/cse-216-project/Controller/Action.php');
} else if ($_SERVER["DOCUMENT_ROOT"] == "D:\\home\\site\\wwwroot") {
    include($_SERVER["DOCUMENT_ROOT"] . '\\DAO\\AccountDAO.php');
    include($_SERVER["DOCUMENT_ROOT"] . '\\Controller\\Action.php');
}

class Action_SignUp implements Action {
    
    public function execute($request) {
        
        $dao = new AccountDAO();
        
        $lastname = $request->get("LastName");
        $firstname = $request->get("FirstName");
        $address = $request->get("Address");
        $city = $request->get("City");
        $password = $request->get("Password");
        $username = $request->get("Username");
        $email = $request->get("EmailAddress");
        $state = $request->get("State");
        
        $dao->addAccount($lastname,$firstname,$address,$city,$password,$username,$email,$state);
        
        
        
        $server = "";
            if ($_SERVER["DOCUMENT_ROOT"] == "C:/xampp/htdocs") {

                $localhost = "C:/xampp/htdocs";
                $server = "/cse-216-project/Presentation/";
            } else if ($_SERVER["DOCUMENT_ROOT"] == "D:\\home\\site\\wwwroot") {
                $server = "Presentation\\";
            }
        
        
        header("Location:".$server."login.php"); 
    }
    
}
    
?>