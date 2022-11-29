<?php


function send_mail()
{
    $data = [];

    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    $from = "Agro and Allied <info@agroandallied.com>";
    $to = $_POST['email'];
    $subject = "New Enquiry from AgroAllied Website";
    $subject_to_sender = "We've received your Mail";
    $message = "
        <h3>New enquiry from AgroAllied Website - agroandallied.com
        </h3>
        <p><strong>Name:</strong> " . $_POST['name'] . "</p>
        <p><strong>Phone:</strong> " . $_POST['phone'] . "</p>
        <p><strong>Email:</strong> " . $_POST['email'] . "</p>
        <p><strong>Message:</strong> " . $_POST['message'] . "</p>
    ";

    $data['from'] = $from;
    $data['to'] = $to;
    $data['subject'] = $subject;
    $data['message'] = $message;

    // The content-type header must be set when sending HTML email                
    $headers = "From: $from\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html\r\n";
    $headers .= "charset: utf-8\r\n";
    $headers .= "Reply-To: $from\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();
    $headers .= "X-Priority: 1\r\n";

    include('email.php'); // $html_body;

    // Send Email
    if (mail($to, $subject, $message, $headers)) {

        // acknowledgement mail
        mail($to, $subject_to_sender, $html_body, $headers);

        echo json_encode([
            'success' => true,
            'feedback' => 'Form submitted! Our team will respond accordingly'
        ]);
    } else {
        echo json_encode([
            'success' => false,
            'feedback' => 'Form submit failed. Please try again'
        ]);
    }
}


send_mail();
