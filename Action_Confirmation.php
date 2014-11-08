<html>
    
    <body>
        Please wait while we update stuff...
        <br/>
        
        <img src="giphy.gif" alt="Nyan cat">
    </body>
    
    <?php
    session_start();

    include 'InventoryDAO.php';

    $dao = new InventoryDAO();
        //$id = $request->get("id"); 
      //  $quantity = $request->get("quantity"); 
    $result=$dao->update($SESSION['id'], $SESSION['quantity']);
    $i=0;
    while(empty($result)){
        
        
        if($i>5000){
            break;
        }
        
    }
    
     header("Location: Action_Display.php");    
    ?>
    
</html>
