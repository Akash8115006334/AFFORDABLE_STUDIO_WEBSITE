<?php 
include "../config.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require('PHPMailer/src/Exception.php');
require('PHPMailer/src/PHPMailer.php');
require('PHPMailer/src/SMTP.php');

$mail = new PHPMailer(true);

try {                
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                               //Send using SMTP
    $mail->Host       = 'smtp.hostinger.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                    //Enable SMTP authentication
    $mail->Username   = 'deepanshu@navix.in';                     //SMTP username
    $mail->Password   = 'Dc@100420';                          //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;          //Enable implicit TLS encryption
    $mail->Port       = 465;                                   
  
    //Recipients
    $mail->setFrom('deepanshu@navix.in', APP_NAME); //From Email with Company Name
    $mail->isHTML(true);

    
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $mail->addAddress(APP_EMAIL, APP_NAME);  
    $full_name = $_POST['fullname'];
    $fathers_name = $_POST['fathersHusband'];
    $mobile_number = $_POST['mobileNumber'];
    $email_id = $_POST['email'];
    $address = $_POST['address'];
    $aadhar_card = $_POST['aadhaar'];
    $pan_card = $_POST['pan'];
    $plot_size = $_POST['plotSize'];
    $occupation = $_POST['occupation'];
    $referred_by = $_POST['referred_by'];

    $Message = "Full Name : " . $full_name . "<br>Father's/Husband's Name : " . $fathers_name . "<br>Mobile Number : " . $mobile_number . "<br>Email ID : " . $email_id . "<br>Address : " . $address . "<br>Aadhar Card : " . $aadhar_card . "<br>Pan Card : " . $pan_card . "<br>Studio Size : " . $plot_size . "<br>Occupation : " . $occupation . "<br>Referred by : " . $referred_by;
    $mail->Subject = 'Enquiry Form';
    $mail->Body    = $Message;
    if ($mail->send()) {
        echo json_encode(['status' => 'success', 'message' => 'Form submitted successfully!']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Failed to send email.']);
    }
}

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}