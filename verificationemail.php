<?php
$to      = $email; // Send email to our user
$subject = 'Signup | Verification'; // Give the email a subject 
$message = '
 
Thanks for signing up!
Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.
 
------------------------
Email: '.$email.'
Password: '.$password.'
------------------------
 
Please click this link to activate your account:
localhost/oes/verify.php?email='.$email.'&hash='.$hash.''; // Our message above including the link
                     
$headers = 'From:noreply@localhost' . "\r\n"; // Set from headers
mail($to, $subject, $message, $headers);
?>
