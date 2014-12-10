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
    
    public function getId() {
        return $this->id;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setPassword($password) {
        $this->password = $password;
    }


    
}

?>

