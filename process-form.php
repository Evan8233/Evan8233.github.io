<?php
// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get the form fields
  $name = $_POST["name"];
  $email = $_POST["email"];
  $subject = $_POST["subject"];
  $message = $_POST["message"];

  // Set the recipient email address
  $to = "evangdean1@gmail.com";

  // Set the email subject
  $subject = "New message from your website: " . $subject;

  // Build the email message
  $message = "Name: " . $name . "\n\n";
  $message .= "Email: " . $email . "\n\n";
  $message .= "Message: \n" . $message;

  // Set the email headers
  $headers = "From: " . $name . " <" . $email . ">\r\n";
  $headers .= "Reply-To: " . $email . "\r\n";
  $headers .= "X-Mailer: PHP/" . phpversion();

  // Send the email
  if (mail($to, $subject, $message, $headers)) {
    // If the email was sent successfully, redirect to a thank-you page
    header("Location: index.html");
  } else {
    // If there was an error sending the email, display an error message
    echo "There was an error sending your message. Please try again later.";
  }
}
?>

