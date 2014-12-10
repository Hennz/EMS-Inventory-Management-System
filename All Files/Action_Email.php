
<!--Created the Action EMAIL class. - Wellesley Arreza-->

<!DOCTYPE html>


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
        

ini_set("SMTP","cseproj.azurewebsites.net");


ini_set("smtp_port","25");


ini_set('sendmail_from', 'wra216@cseproj.azurewebsites.net');
   
$subject = 'subject';
$message = 'message';
$to = 'wra216@lehigh.edu';
$type = 'plain'; // or HTML
$charset = 'utf-8';

$mail     = 'no-reply@'.str_replace('www.', '', $_SERVER['SERVER_NAME']);
$uniqid   = md5(uniqid(time()));
$headers  = 'From: '.$mail."\n";
$headers .= 'Reply-to: '.$mail."\n";
$headers .= 'Return-Path: '.$mail."\n";
$headers .= 'Message-ID: <'.$uniqid.'@'.$_SERVER['SERVER_NAME'].">\n";
$headers .= 'MIME-Version: 1.0'."\n";
$headers .= 'Date: '.gmdate('D, d M Y H:i:s', time())."\n";
$headers .= 'X-Priority: 3'."\n";
$headers .= 'X-MSMail-Priority: Normal'."\n";
$headers .= 'Content-Type: multipart/mixed;boundary="----------'.$uniqid.'"'."\n\n";
$headers .= '------------'.$uniqid."\n";
$headers .= 'Content-type: text/'.$type.';charset='.$charset.''."\n";
$headers .= 'Content-transfer-encoding: 7bit';

   $retval = mail ($to,$subject,$message,$headers);
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
