<!--
Created the Account class. - Wellesley Arreza
-->


<?php

class Account {
    public $id;
    public $password;

    function __construct($id,$password) {  
        $this->id=$id;
        $this->password = $password;
    }
    
}

?>

