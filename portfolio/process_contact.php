<?php
// Process Contact Form
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $subject = htmlspecialchars(trim($_POST['subject']));
    $message = htmlspecialchars(trim($_POST['message']));
    
    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header('Location: index.php?error=invalid_email');
        exit;
    }
    
    // Email configuration
    $to = 'your.email@example.com'; // Thay bằng email của bạn
    $email_subject = "Portfolio Contact: " . $subject;
    $email_body = "Bạn nhận được tin nhắn mới từ portfolio:\n\n";
    $email_body .= "Tên: $name\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Chủ đề: $subject\n\n";
    $email_body .= "Tin nhắn:\n$message\n";
    
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    
    // Send email
    if (mail($to, $email_subject, $email_body, $headers)) {
        // Success - redirect with success message
        header('Location: index.php?success=1');
    } else {
        // Error - redirect with error message
        header('Location: index.php?error=send_failed');
    }
    exit;
} else {
    // If not POST request, redirect to home
    header('Location: index.php');
    exit;
}
?>

