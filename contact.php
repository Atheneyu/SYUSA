<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $language = $_POST['language'];
  $preferredMethod = $_POST['preferredMethod'];
  $contactInfo = $_POST['contactInfo'];
  $message = $_POST['message'];


  $to = 'your-email@example.com';
  $subject = 'New Contact Form Submission';
  $emailBody = "Name: $name\nLanguage: $language\nPreferred Method: $preferredMethod\nContact Info: $contact\nMessage: $message";
