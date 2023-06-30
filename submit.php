<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $firstName = $_POST["first-name"];
  $lastName = $_POST["last-name"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  $message = $_POST["message"];

  // Create the email content
  $subject = "New Contact Form Submission";
  $emailContent = "First Name: " . $firstName . "\n";
  $emailContent .= "Last Name: " . $lastName . "\n";
  $emailContent .= "Email: " . $email . "\n";
  $emailContent .= "Phone: " . $phone . "\n";
  $emailContent .= "Message: " . $message . "\n";

  // Send the email
  $to = "sikhfamily9@gmail.com"; // Replace with your own email address
  $headers = "From: " . $email;

  if (mail($to, $subject, $emailContent, $headers)) {
    echo "Email sent successfully.";
  } else {
    echo "Failed to send email.";
  }
}
?>
