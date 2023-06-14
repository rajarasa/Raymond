<?php

   $to = "raymondfinefabricscbe@gmail.com";
   $subject = "New Newsletter From Website";
   $message = "A new Quotes form has been received.\n\n";
   $message .= "Mail ID : " . $_POST["mail"];
   $headers = "From: Raymond@website.com";
   mail($to, $subject, $message, $headers);
   header("Location: index.html");

?>