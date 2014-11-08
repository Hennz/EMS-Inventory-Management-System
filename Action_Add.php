<!--Created the Action ADD class. - Wellesley Arreza-->

<?php
session_start();

include 'Action.php';
include 'InventoryDAO.php';

class Action_Add implements Action {

    public function execute($request) {
        
        
        $array=array();
        
        
        
        $dao = new InventoryDAO();
        $id = $request->get("id"); 
        $quantity = $request->get("quantity"); 
        echo $id[1];
        echo $quantity[2];
        echo $result=$dao->update($id, $quantity);
        
        header("Location: Action_Confirmation.php");
        while($result==false){
            
            
            if($result){
                header("Location: Action_Display.php");
                break;
            }
            
            
        }
        
        
        /*
        $class='Action_Confirmation.php';
        $confirm= new $class;
        $confirm->execute($request); 
        */
                
    }

}    

