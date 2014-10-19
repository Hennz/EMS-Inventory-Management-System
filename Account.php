

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

