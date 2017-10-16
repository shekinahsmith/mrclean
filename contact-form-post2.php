<?
   
    $formInfo = $_POST['formInfo'];

    $firstName =  $formInfo['firstName'];
    $lastName =  $formInfo['lastName'];
    $city =  $formInfo['city'];
    $state =  $formInfo['state'];
    $zip =  $formInfo['zip'];
    $phone =  $formInfo['phone'];
    $email =  $formInfo['email'];

    $message = " <html> <body> <h1>New Quote Request</h1> <p><strong>Cutomer Name:</strong> " . $firstName . ' ' . $lastName . "</p> <p><strong>Customer Area:</strong> " . $city . ' ' . $state . ', ' . $zip . "</p> <h2>Customer Contact Information</h2> <p><strong>Phone:</strong> " . $phone . "</p> <p><strong>Email:</strong> " . $email . "</p> </body> </html>";


    $to = "mistercleancompany@gmail.com";
    $subject = "Mr. Clean Website Quote Request Form";
    $headers = "From: contact@shekinahsmith.com\r\n";
    $headers .= "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "X-Priority: 1\r\n";
    $headers .= "X-Mailer: PHP". phpversion() ."\r\n"; 
    $headers .= "Reply-To: <$email>\r\n"; 
    $headers .= "Return-Path: <$email>\r\n";
    mail($to, $subject, $message, $headers, "-fcontact@shekinahsmith.com");
?>