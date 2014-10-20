<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
session_start();

include 'Action.php';
include 'InventoryDAO.php';

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        /*
   $to = "wra216@lehigh.edu";
   $subject = "Jon this is spam from wes";
   $message = "Heyhey... So this is my php script. I don't mean to spam you. Actually.... I do. Haha.";
   $header = "From:TheWizard@gmail.com \r\n";
   $retval = mail ($to,$subject,$message,$header);
   if( $retval == true )  
   {
      echo "Message sent successfully...";
   }
   else
   {
      echo "Message could not be sent...";
   }*/
   
   $to = "wra216@lehigh.edu";
   $subject = "This is subject";
   $message = "<b>This is HTML message.</b>";
   $message .= "<h1>This is headline.</h1>";
   $header = "From:wra216@lehigh.edu \r\n";
   //$header = "Cc:wra216@lehigh.edu \r\n";
  // $header .= "MIME-Version: 1.0\r\n";
   $header .= "Content-type: text/html\r\n";
   $retval = mail ($to,$subject,$message,$header);
   if( $retval == true )
   {
      echo "Message sent successfully...";
   }
   else
   {
      echo "Message could not be sent...";
   }
   
   
?>
        
        Email Sent!!!
    </body>
</html>
