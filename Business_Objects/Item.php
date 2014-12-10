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
    
    public function getId() {
        return $this->id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getQuantity() {
        return $this->quantity;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function setQuantity($quantity) {
        $this->quantity = $quantity;
    }

    public function setDescription($description) {
        $this->description = $description;
    }


    
     
    
}

?>

