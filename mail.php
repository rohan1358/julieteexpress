<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'mail.nanangkristanto.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'aris@nanangkristanto.com';                     // SMTP username
    $mail->Password   = 'kosonginaja';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('sitirobiatussaadiyah@gmail.com', 'juliet Express');
    $mail->addAddress('arispriyatna95@gmail.com', 'Aris Priyatna');     // Add a recipient
    $mail->addAddress('aris_pryatna@yahoo.com', 'Aris Priyatna');     // Add a recipient
    // $mail->addAddress('ellen@example.com');               // Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    // Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Kemitraan julieteexpress';
    $mail->Body    = '<!DOCTYPE html>
                        <html lang="en">
                        <head>
                            <meta charset="UTF-8">
                            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                            <meta http-equiv="X-UA-Compatible" content="ie=edge">
                            <title></title>
                        </head>
                        <body style="background-color: #f7f7f7; padding: 0px; margin: 0px;">
                            <div style="width: 80%; margin: auto; background: #A45F2A; padding: 10px 0px">
                                <h2 align="center" style="color:#FFFF">
                                    <strong>Kemitraan Juliet Express</strong>
                                </h2>
                            </div>
                            <div style="width: 80%; margin: auto; background: #FFF; padding: 10px 0px;">
                                <div style="padding:40px 200px;">
                                    <table style="font-family:Arial,Helvetica,sans-serif;border-collapse:collapse" width="100%">
                                        <tr>
                                            <td style="padding:7px;border:1px solid #ddd"><strong>Nama</strong></td>
                                            <td style="padding:7px;border:1px solid #ddd; width: 10px;"> : </td>
                                            <td style="padding:7px;border:1px solid #ddd"> Diah</td>
                                        </tr>
                                        <tr>
                                            <td style="padding:7px;border:1px solid #ddd"><strong>No Telp</strong></td>
                                            <td style="padding:7px;border:1px solid #ddd"> : </td>
                                            <td style="padding:7px;border:1px solid #ddd"> 09876567</td>
                                        </tr>
                                        <tr>
                                            <td style="padding:7px;border:1px solid #ddd"><strong>Email</strong></td>
                                            <td style="padding:7px;border:1px solid #ddd"> : </td>
                                            <td style="padding:7px;border:1px solid #ddd"> email@gmail.com</td>
                                        </tr>
                                        <tr>
                                            <td style="padding:7px;border:1px solid #ddd"><strong>Alamat</strong></td>
                                            <td style="padding:7px;border:1px solid #ddd"> : </td>
                                            <td style="padding:7px;border:1px solid #ddd"> alamat</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </body>
                        </html>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}