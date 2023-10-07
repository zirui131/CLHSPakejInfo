<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $message = $_POST["pakejinfo"];
    
    // Replace with your email address
    $to = "ngzirui131@gmail.com";
    $subject = "Pakej Info: ";
    $headers = "From: $email";
    
    // Compose the email message
    $email_message .= "Email: $email\n";
    $email_message .= "Message:\n$message";
    
    // Send the email
    if (mail($to, $subject, $email_message, $headers)) {
        echo "Thank you for your message. ";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
} else {
    // Handle form submission failure
    echo "Form submission error.";
}
?>