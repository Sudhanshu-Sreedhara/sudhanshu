<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and retrieve form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Email configuration
    $to = "your-email@example.com";  // Change this to your actual email address
    $subject = "New Message from Contact Form";
    $headers = "From: " . $email . "\r\n" .
               "Reply-To: " . $email . "\r\n" .
               "Content-Type: text/html; charset=UTF-8";

    // Message content
    $body = "<h2>Message from: $name</h2>
             <p><strong>Email:</strong> $email</p>
             <p><strong>Message:</strong> $message</p>";

    // Sending email
    if (mail($to, $subject, $body, $headers)) {
        echo "<p>Your message has been sent successfully!</p>";
    } else {
        echo "<p>Sorry, there was an error sending your message. Please try again later.</p>";
    }
} else {
    // If the form is not submitted
    echo "<p>No data received.</p>";
}
?>
