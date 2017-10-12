<?
   
    $formInfo = $_POST['formInfo'];

    $firstName =  $formInfo['firstName'];
    $lastName =  $formInfo['lastName'];
    $city =  $formInfo['city'];
    $state =  $formInfo['state'];
    $zip =  $formInfo['zip'];
    $phone =  $formInfo['phone'];
    $email =  $formInfo['email'];

    $message = "<html><body><p>Name: " . $firstName . ' ' . $lastName . "</p> <p>Area: " . $city . ' ' . $state . ', ' . $zip . "</p> <p>Phone: " . $phone . "</p> <p>Email: " . $email . "</p> </body> </html>";
    
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";


    $to = "kinahb90@gmail.com";
    $subject = "Mr. Clean Website Contact Request";
    $headers .= "From: $email\r\n";
    mail($to, $subject, $message, $headers);

?>