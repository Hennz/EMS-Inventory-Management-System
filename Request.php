<!-- Created the class to model requests -->

<?php

class Request {
    private $request = array();
    
    public function __construct() {
        if (!empty($_POST)) $this->request = $_POST;
        if (!empty($_GET)) $this->request = $_GET;
    }
    
    public function get($name) {
        if (array_key_exists($name, $this->request)) 
                
                return $this->request[$name];
        return '';
    }
    
    public function set($name, $value) {
        $this->request[$name] = $value;
    }
    
    public function getCommand() {
        if (isset($this->request['login'])){
            return 'Login';
        }
        
        else if (isset($this->request['display'])){
            return "Display";
        }
        
        else if (isset($this->request['Email'])){
            return "Email";
        }
        
        else if (isset($this->request['add'])){
            return "Add";
        }
       
       
        
        
        }
    }


?>
