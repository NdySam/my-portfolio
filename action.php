<?php

if (isset($_POST['contact'])) {
    print_r ($_POST);
    $to = "freekysam97@gmail.com";
         $subject = $_POST['subject'];
         
         $message = $_POST['message'];
         
         $header = "From:" . $_POST['email'] . " \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }
      
}