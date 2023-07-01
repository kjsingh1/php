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
<!DOCTYPE html>
<html>
<head>
  <title>Contact Form</title>
</head>
<body>
  <h1>Contact Form</h1>
  <form method="POST" action="">
    <label for="first-name">First Name:</label>
    <input type="text" id="first-name" name="first-name" required><br>

    <label for="last-name">Last Name:</label>
    <input type="text" id="last-name" name="last-name" required><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br>

    <label for="phone">Phone:</label>
    <input type="text" id="phone" name="phone" required><br>

    <label for="message">Message:</label>
    <textarea id="message" name="message" required></textarea><br>

    <input type="submit" value="Submit">
  </form>
</body>
</html>
