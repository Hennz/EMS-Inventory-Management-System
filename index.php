
<?php

include 'Request.php';


$server = "";
$server2="";
if ($_SERVER["DOCUMENT_ROOT"] == "C:/xampp/htdocs") {

    $localhost = "C:/xampp/htdocs";
    $server = "/cse-216-project/Presentation/";
    $server2 = $localhost . "/cse-216-project/Controller/";
} else if ($_SERVER["DOCUMENT_ROOT"] == "D:\\home\\site\\wwwroot") {
    $server = "\\Presentation\\";
    $server2 = "D:\\home\\site\\wwwroot\\Controller\\";
}

$request = new Request();
$class='Action_' . $request->getCommand();


if($request->getCommand()=="Login"){
    header("Location: Presentation\\login.php");  
    
}
else{

require_once $server2. $class . '.php';

$action = new $class;
$action->execute($request);  


}







?>


