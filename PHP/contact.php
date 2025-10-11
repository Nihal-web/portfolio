<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = htmlspecialchars($_POST['fname']);
    $email   = htmlspecialchars($_POST['email']);
    $phone   = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    $to      = "nihalvarshney666@gmail.com";  // 🔹 Replace with your Gmail address
    $subject = "New Contact Form Submission";
    $body    = "You have received a new message from your website contact form:\n\n" .
               "Name: $name\n" .
               "Email: $email\n" .
               "Phone: $phone\n" .
               "Message:\n$message";

    $headers = "From: $email\r\n" .
               "Reply-To: $email\r\n" .
               "X-Mailer: PHP/" . phpversion();

    if (mail($to, $subject, $body, $headers)) {
        echo "<h3>Message sent successfully! Thank you, $name.</h3>";
    } else {
        echo "<h3>Sorry, there was an error sending your message. Please try again later.</h3>";
    }
}
?>
