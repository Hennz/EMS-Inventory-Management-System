<!--
Created the php file that handles different types of interactions. - Wellesley Arreza


-->

<?php

include 'Request.php';

$request = new Request();
$class = 'Action_' . $request->getCommand();
require_once $class . '.php';
$action = new $class;

/*
 * Do a case by case
 * Based on Action
 * 
 */
/*
if($class== 'Action_Login.php'){
$action->execute($request);
$class=  'Action_Display.php';
$action = new $class;*/
$action->execute($request);  




?>


