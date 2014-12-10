
<?php
include 'Request.php';

$request = new Request();
$class = 'Action_' . $request->getCommand();

if($request->getCommand()=="Login"){
    header("Location: login.html");  
}
else{

require_once $class . '.php';
$action = new $class;
$action->execute($request);  
}
?>


