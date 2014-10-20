<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
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
   }
?>
    </body>
</html>
