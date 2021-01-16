<?php
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$message = $_POST['message'];

$email_from = 'Kavita Memorial Nursing Home';
$email_subject = 'New message from KMNH contact';
$email_body = "Name: $name.\n".
              "Email: $email.\n".
              "Mobile: $mobile.\n".
              "Message: $message.\n";
$to ="abhi.arya509@gmail.com";
$headers ="From: $email_from \r\n";
$headers .="Reply-To: $email \r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location:kmnh\contact.html");
if(mail($to, $email_subject, $email_body, $headers)){
    echo 'Your mail has been sent successfully.';
} else{
    echo 'Unable to send email. Please try again.';
}
?>
