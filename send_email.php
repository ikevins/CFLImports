<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = htmlspecialchars($_POST['firstName']);
    $lastName = htmlspecialchars($_POST['lastName']);
    $vehicleYear = htmlspecialchars($_POST['vehicleYear']);
    $vehicleMake = htmlspecialchars($_POST['vehicleMake']);
    $vehicleModel = htmlspecialchars($_POST['vehicleModel']);
    $phoneNumber = htmlspecialchars($_POST['phoneNumber']);
    $emailAddress = htmlspecialchars($_POST['emailAddress']);
    $reasonForVisit = htmlspecialchars($_POST['reasonForVisit']);

    $currentHour = date("H");
    
    if ($currentHour < 12) {
        $greeting = "Good Morning";
    } elseif ($currentHour < 18) {
        $greeting = "Good Afternoon";
    } else {
        $greeting = "Good Evening";
    }
    
    $to = "singh.kevin98@gmail.com";
    $subject = "New Customer Inquiry";
    $message = "$greeting Central Florida Import Specialists,\n\n";
    $message .= "My name is $firstName $lastName";
    $message .= "I have a $vehicleYear $vehicleMake $vehicleModel\n\n";
    $message .= "The reason for this appointment is: $reasonForVisit\n\n";
    $message .= "Please reach out to me at $phoneNumber or $emailAddress";
    $headers = "From: no-reply@cflimports.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you! Your submission has been received.";
    } else {
        echo "Error: Unable to send email.";
    }
}
?>
