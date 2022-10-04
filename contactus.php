<?php


function send_mail()
{
    $data = [];

    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    $from = "info@agroandallied.com";
    $to = $_POST['email'];
    $subject = "Mail from AgroAllied website Contact";
    $message = "
    <html>
    <head>
        <title>Mail from AgroAllied website Contact</title>
    </head>
    <body>
        <p> Name: " . $_POST['name'] . "</p>
        <p> Phone: " . $_POST['phone'] . "</p>
        <p> Email: " . $_POST['email'] . "</p>
        <p> Message: " . $_POST['message'] . "</p>
    </body>
    </html>
    ";

    $data['from'] = $from;
    $data['to'] = $to;
    $data['subject'] = $subject;
    $data['message'] = $message;


    // The content-type header must be set when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers = "From:" . $from;

    // Send Email
    if (mail($to, $subject, $message, $headers)) {
        // if (true) { # for testing

        echo json_encode([
            'success' => true,
            'feedback' => 'Form submitted! Our team will respond accordingly'
        ]);

        // echo json_encode($data); # for testing

    } else {
        echo json_encode([
            'success' => false,
            'feedback' => 'Form submit failed. Please try again'
        ]);
    }
}


send_mail();
