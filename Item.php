<!--Created the class to model Items. -Wellesley Arreza



-->


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

