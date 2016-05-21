<?php
if( isset($_POST) ){
     
    //form validation vars
    $formok = true;
    $errors = array();
     
    //sumbission data
    $ipaddress = $_SERVER['REMOTE_ADDR'];
    $date = date('d/m/Y');
    $time = date('H:i:s');
     
    //form data
    $name = $_POST['contact_name'];    
    $email = $_POST['contact_email'];
    $enquiry = $_POST['contact_subject'];
    $message = $_POST['contact_message'];
     
    //form validation to go here....
     
}
//send email if all is ok
if($formok){
    $headers = "From: info@geoffiwata.github.io" . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
     
    $emailbody = "<p>You have recieved a new message from the enquiries form on your website.</p>
                  <p><strong>Name: </strong> {$contact_name} </p>
                  <p><strong>Email Address: </strong> {$contact_email} </p>
                  <p><strong>Enquiry: </strong> {$contact_subject} </p>
                  <p><strong>Message: </strong> {$contact_message} </p>
                  <p>This message was sent from the IP Address: {$ipaddress} on {$date} at {$time}</p>";
     
    mail("gziwata@gmail.com","New Enquiry",$emailbody,$headers);
     
}