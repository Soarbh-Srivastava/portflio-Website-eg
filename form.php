<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $comments = $_POST["comments"];

    // Prepare the email content
    $to = "soarbh1234@gmailcom";
    $headers = "From: $email";
    $message = "Name: $name\nEmail: $email\nSubject: $subject\n\n$comments";

    // Send the email
    $mailSent = mail($to, $subject, $message, $headers);

    if ($mailSent) {
        // Redirect to a "Thank You" page or display a success message
        header("Location: thank_you.html");
        exit;
    } else {
        // Redirect to an error page or display an error message
        header("Location: error.html");
        exit;
    }
}
?>
