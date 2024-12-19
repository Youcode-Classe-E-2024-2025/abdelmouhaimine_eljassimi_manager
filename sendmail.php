<?php
include("database.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$email = $_POST["email"];


$query = "SELECT * from actors WHERE email = ?";
$stmt = $connection->prepare($query);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {

    $row = $result->fetch_assoc();
    $id = $row['id'];
    
    $mail = new PHPMailer(true);
    $alertMessage = "";

    try {
        $mail->isSMTP(); 
        $mail->Host = 'smtp.mailersend.net'; 
        $mail->SMTPAuth = true;  
        $mail->Username = 'MS_A9LfRb@trial-zr6ke4nke2v4on12.mlsender.net';
        $mail->Password = 'oKDzYPTR7wp0vSag';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587; 


        $mail->setFrom('MS_A9LfRb@trial-zr6ke4nke2v4on12.mlsender.net', 'Your Name');
        $mail->addAddress($email, 'Recipient Name');

        $resetLink = "http://localhost/abdelmouhaimine_eljassimi_manager/reset_password.php?id=$id";
        $mail->isHTML(true); // Set email format to HTML
        $mail->Subject = '100 BOOKS RESET YOUR PASSWORD';
        $mail->Body    = "
        <!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Reset Your Password</title>
        </head>
        <body style='margin: 0; padding: 0; font-family: Arial, sans-serif; background-color: #f4f4f4;'>
            <table role='presentation' style='width: 100%; border-collapse: collapse;'>
                <tr>
                    <td align='center' style='padding: 40px 0;'>
                        <table role='presentation' style='width: 600px; border-collapse: collapse; background-color: #ffffff; border-radius: 8px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);'>
                            <tr>
                                <td style='padding: 40px 30px;'>
                                    <h1 style='color: #333333; font-size: 24px; margin-bottom: 20px; text-align: center;'>Reset Your Password</h1>
                                    <p style='color: #666666; font-size: 16px; line-height: 1.5; margin-bottom: 30px; text-align: center;'>
                                        We received a request to reset your password. If you didn't make this request, you can ignore this email.
                                    </p>
                                    <table role='presentation' style='width: 100%; border-collapse: collapse;'>
                                        <tr>
                                            <td align='center'>
                                                <a href='$resetLink' style='display: inline-block; padding: 14px 30px; background-color: #8c52fd; color: #ffffff; text-decoration: none; font-size: 16px; font-weight: bold; border-radius: 4px;'>Reset Password</a>
                                            </td>
                                        </tr>
                                    </table>
                                    <p style='color: #666666; font-size: 14px; line-height: 1.5; margin-top: 30px; text-align: center;'>
                                        If the button above doesn't work, copy and paste the following link into your browser:
                                    </p>
                                    <p style='color: #8c52fd; font-size: 14px; line-height: 1.5; word-break: break-all; text-align: center;'>
                                        $resetLink
                                    </p>
                                    <p style='color: #666666; font-size: 14px; line-height: 1.5; margin-top: 30px; text-align: center;'>
                                        This password reset link will expire in 24 hours. If you need assistance, please contact our support team.
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td style='background-color: #f8f9fa; padding: 20px 30px; border-bottom-left-radius: 8px; border-bottom-right-radius: 8px;'>
                                    <p style='color: #999999; font-size: 14px; margin: 0; text-align: center;'>
                                        &copy; 2023 Your Company Name. All rights reserved.
                                    </p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </body>
        </html>";
        $mail->AltBody = 'This is the plain-text version of the email.';
        $mail->SMTPDebug = 0;  

        if ($mail->send()) {
            $alertMessage = "Message has been sent successfully!";
        } else {
            $alertMessage = "Message could not be sent.";
        }
    } catch (Exception $e) {
        $alertMessage = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
    .font-roboto {
      font-family: 'Roboto', sans-serif;
    }
    </style>
    <title>100 BOOKS</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
<body class="bg-gray-100 font-roboto">


    <main class="flex items-center justify-center h-screen">
        <div class="text-center">
             <a href="index.php"><img class="w-32" src="assets/logo.png" alt="logo"></a>
            <h2 class="text-6xl font-extrabold text-[#7E55E7] mb-4">RESET LINK SENT TO YOUR EMAIL</h2>
            <p class="text-lg text-[#131313]">go check and click on the button to reset your password</p>
        </div>
    </main>

</body>
</html>
