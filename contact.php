<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $language = $_POST['language'];
  $preferredMethod = $_POST['preferredMethod'];
  $contactInfo = $_POST['contactInfo'];
  $message = $_POST['message'];

  // Process the form data (e.g., send an email, store in a database, etc.)

  // Example: Send an email
  $to = 'your-email@example.com';
  $subject = 'New Contact Form Submission';
  $emailBody = "Name: $name\nLanguage: $language\nPreferred Method: $preferredMethod\nContact Info: $contactInfo\nMessage: $message";
  $headers = "From: $to";

  if (mail($to, $subject, $emailBody, $headers)) {
    echo 'Thank you for your message. We will get back to you soon!';
  } else {
    echo 'Sorry, there was an error sending your message.';
  }
}
?>
