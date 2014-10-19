<!--Wellesley Arreza
wra216
CSE 297 – Web Application Development – Spring 2014
Homework Assignment 6 
Task Manager
Due Wednesday, March 26th-->


<?php

class Item {
    public $id;
    public $title;
    public $quantity;
    public $description;
    function __construct($id,$title,$quantity,$description) {  
        $this->id=$id;
        $this->title=$title;
        $this->quantity = $quantity;
        $this->description = $description;
    }
    
     
    
}

?>

