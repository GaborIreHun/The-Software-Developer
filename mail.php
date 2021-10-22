<?php
///subscribe form
    $recipient = "thesoftwaredeveloper.eire@gmail.com"; ///  Your Email address
    if (isset($_POST['email'])){
        //Send Mail To Webmaster
        $email = $_POST['email'] ;
        $subject = 'Webste comment';
        $message =  $email . ' The message .';
        mail("$recipient", $subject, $message, "From:" . $recipient);
    }
    // thanks to: https://stackoverflow.com/questions/30966602/setting-email-for-bootstrap-3-contact-form-modal

?>