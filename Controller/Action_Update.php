<?php
session_start();


if ($_SERVER["DOCUMENT_ROOT"] == "C:/xampp/htdocs") {

    include($_SERVER["DOCUMENT_ROOT"] . '/cse-216-project/DAO/ItemDAO.php');
    include($_SERVER["DOCUMENT_ROOT"] . '/cse-216-project/Controller/Action.php');
} else if ($_SERVER["DOCUMENT_ROOT"] == "D:\\home\\site\\wwwroot") {
    include($_SERVER["DOCUMENT_ROOT"] . '\\DAO\\ItemDAO.php');
    include($_SERVER["DOCUMENT_ROOT"] . '\\Controller\\Action.php');
}




class Action_Update implements Action {

    public function execute($request) {    
        $dao = new ItemDAO();
       echo $dao->update($this->create($request->get('id'),$request->get('quantity')));           
        //$_SESSION['items'] = $dao->getList();
        //header("Location: Inventory.php");   
    }
    
    
    public function create($id,$quantity){
        $item= array();
        for($i=0; $i<sizeof($id);$i++){
            $item[$i]=new Item($id[$i], "", $quantity[$i], "");
        }
        
        return $item;
        
    }
    

}


?>
