<?php
  $name=$_POST['name'];
  $visitor_email=$_POST['email'];
  $subject=$_POST['subject'];
  $message=$_POST['message'];

  $email_from = 'omolloandrew37@gmail.com';
  $email_subject = 'omollo Andrew 37';
  $email_body = "Username: $name.\n". 
                 "User Email: $visitor_email.\n". 
                  "Subject: $subject.\n". 
                  "User Message: $message.\n";

  $to = "omollondrw@gmail.com";
  $headers = "From: $email_from \r\n";
  $headers .= "Reply-To: $visitor_email \r\n";

  mail($to, $email_subject, $email_body, $headers);
  header("location:contact.html");
