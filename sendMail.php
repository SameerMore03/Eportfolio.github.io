<?php

// use PHPMailer\PHPMailer\PHPMailer;

// require('phpmailer/includes/PHPMailer.php');
// require('phpmailer/includes/Exception.php');
// require('phpmailer/includes/SMTP.php');
// require('phpmailer/includes/PHPMailerAutoload.php');

if (isset($_POST['Submit'])) {
    echo "Inside Contact Form" . "<br>";
    $name = $_POST['name'];
    echo $name . "<br>";
    $email = $_POST['email'];
    echo $email . "<br>";
    $subject = $_POST['subject'];
    echo $subject . "<br>";
    $message = $_POST['message'];
    echo $message . "<br>";
    $to = "sam3172001more@gmail.com";
    $toName = "Sameer More";

    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail($to, $subject, $message, $headers)) {
        echo 'Email sent successfully.';
    } else {
        echo 'Failed to send email.';
    }

    // // Create a new PHPMailer instance
    // $mail = new PHPMailer();

    // // Configure SMTP settings
    // $mail->isSMTP();
    // $mail->Host = 'smtp.office365.com';
    // $mail->SMTPDebug  = 1;
    // $mail->Port = 587;
    // $mail->SMTPAuth = true;
    // $mail->Username = 'sameer.m@encubeethicals.com';
    // $mail->Password = 'EBot#2023';

    // // Set email content
    // $mail->setFrom($email, $name);
    // $mail->addAddress($to, $toName);
    // $mail->Subject = $subject;
    // $mail->Body = $message;

    // // Send email
    // if ($mail->send()) {
    //     echo 'Email sent successfully.';
    // } else {
    //     echo 'Failed to send email. Error: ' . $mail->ErrorInfo;
    // }
}
