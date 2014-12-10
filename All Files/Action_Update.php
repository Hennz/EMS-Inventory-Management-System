<?php
session_start();

include 'Action.php';
include 'ItemDAO.php';
include 'Item.php';

class Action_Update implements Action {

    public function execute($request) {    
        $dao = new ItemDAO();
        $dao->update(create($request->get('id'),$request->get('quantity')));           
        //$_SESSION['items'] = $dao->getList();
        //header("Location: Inventory.php");   
    }
    
    
    public function create($id,$quantity){
        $item= [];
        for($i=0; $i<sizeof($id);$i++){
            $item[$i]=new Item($id, "", $quantity, "");
        }
        
        return $item;
        
    }
    

}


?>
