<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect data from the form
    $name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['phone']);

    // Your email where you want to receive the form data
    $to = "kavindhrens@gmail.com";
    $subject = "New Form Submission";

    // Email content
    $message = "Name: " . $name . "\n";
    $message .= "Phone Number: " . $phone . "\n";

    // Email headers
    $headers = "From: noreply@example.com";

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "Form submitted successfully!";
    } else {
        echo "Error sending email.";
    }
}
?>
