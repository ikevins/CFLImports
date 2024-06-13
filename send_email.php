<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = htmlspecialchars($_POST['firstName']);
    $lastName = htmlspecialchars($_POST['lastName']);
    $year = htmlspecialchars($_POST['year']);
    $make = htmlspecialchars($_POST['make']);
    $model = htmlspecialchars($_POST['model']);
    $reason = htmlspecialchars($_POST['reason']);
    
    $to = "singh.kevin98@gmail.com"; // Replace with your email address
    $subject = "New Form Submission";
    $message = "First Name: $firstName\n";
    $message .= "Last Name: $lastName\n";
    $message .= "Year: $year\n";
    $message .= "Make: $make\n";
    $message .= "Model: $model\n";
    $message .= "Reason for Visit: $reason\n";

    $headers = "From: no-reply@yourdomain.com"; // Replace with your domain

    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you! Your submission has been received.";
    } else {
        echo "Error: Unable to send email.";
    }
}
?>
