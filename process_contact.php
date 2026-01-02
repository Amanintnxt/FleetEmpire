<?php
// Contact form handler
// Configure your email settings here
$to_email = "your-email@example.com"; // Change this to your email address
$subject_prefix = "FleetEmpire Contact Form: ";

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate input
    $fullname = isset($_POST['fullname']) ? trim(htmlspecialchars($_POST['fullname'])) : '';
    $number = isset($_POST['number']) ? trim(htmlspecialchars($_POST['number'])) : '';
    $email = isset($_POST['email']) ? filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL) : '';
    $subject = isset($_POST['subject']) ? trim(htmlspecialchars($_POST['subject'])) : '';
    $message = isset($_POST['message']) ? trim(htmlspecialchars($_POST['message'])) : '';
    
    // Validation
    $errors = [];
    
    if (empty($fullname)) {
        $errors[] = "Name is required";
    }
    
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Valid email is required";
    }
    
    if (empty($number)) {
        $errors[] = "Phone number is required";
    }
    
    if (empty($subject)) {
        $errors[] = "Subject is required";
    }
    
    if (empty($message)) {
        $errors[] = "Message is required";
    }
    
    // If no errors, send email
    if (empty($errors)) {
        // Prepare email content
        $email_subject = $subject_prefix . $subject;
        $email_body = "New contact form submission from FleetEmpire website\n\n";
        $email_body .= "Name: " . $fullname . "\n";
        $email_body .= "Email: " . $email . "\n";
        $email_body .= "Phone: " . $number . "\n";
        $email_body .= "Subject: " . $subject . "\n\n";
        $email_body .= "Message:\n" . $message . "\n";
        
        // Email headers
        $headers = "From: " . $email . "\r\n";
        $headers .= "Reply-To: " . $email . "\r\n";
        $headers .= "X-Mailer: PHP/" . phpversion();
        
        // Send email
        if (mail($to_email, $email_subject, $email_body, $headers)) {
            // Success - redirect back with success message
            header("Location: index.php?success=1#contact");
            exit();
        } else {
            // Error sending email
            header("Location: index.php?error=1#contact");
            exit();
        }
    } else {
        // Validation errors - redirect back with error message
        header("Location: index.php?error=validation#contact");
        exit();
    }
} else {
    // Not a POST request - redirect to home
    header("Location: index.php");
    exit();
}
?>

