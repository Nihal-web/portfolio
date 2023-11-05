<?php
$to = 'your_email@gmail.com'; // Receiver Email ID, Replace with your email ID
$subject = 'Contact Us Form Submission'; // Replace with your $subject
$headers = "From: " . strip_tags($_POST['email']) . "\r\n";
$headers .= "Reply-To: ". strip_tags($_POST['email']) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
$message = '<table style="width:100%">
    <tr>
        <td>First Name: </td>
        <td>' . $_POST['fname'] . '</td>
    </tr>
    <tr>
        <td>Last Name: </td>
        <td>' . $_POST['lname'] . '</td>
    </tr>
    <tr>
        <td>Email: </td>
        <td>' . $_POST['email'] . '</td>
    </tr>
    <tr>
        <td>Subject: </td>
        <td>' . $_POST['subject'] . '</td>
    </tr>
    <tr>
        <td>Message: </td>
        <td>' . $_POST['message'] . '</td>
    </tr>
</table>';
if(!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['email']) && !empty($_POST['subject']) && !empty($_POST['message'])) {
    if (mail($to, $subject, $message, $headers)) {
        echo '<script language="javascript">';
        echo 'alert("Your email has been sent successfully.")';
        echo '</script>';
    } else {
        echo '<script language="javascript">';
        echo 'alert("Failed to send your email.")';
        echo '</script>';
    }
} else {
    echo '<script language="javascript">';
    echo 'alert("All fields are required.")';
    echo '</script>';
}
