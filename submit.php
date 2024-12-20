<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve and sanitize form inputs
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $gender = htmlspecialchars($_POST['gender']);
    $message = htmlspecialchars($_POST['message']);

    // Display a confirmation page with the submitted data
    echo "<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Submission Successful</title>
        <link rel='stylesheet' href='style4.css'>
        
    </head>
    <body>
        <div class='form-container'>
            <h1>Form Submitted Successfully</h1>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Phone:</strong> $phone</p>
            <p><strong>Gender:</strong> $gender</p>
            <p><strong>Message:</strong> " . nl2br($message) . "</p>
           
        </div>
    </body>
    </html>";
} else {
    echo "Invalid Request!";
}
?>