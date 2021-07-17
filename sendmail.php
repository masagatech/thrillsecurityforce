<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once "vendor/autoload.php";

//PHPMailer Object
$mail = new PHPMailer(true); //Argument true in constructor enables exceptions
$mail->isSMTP();
// $mail->SMTPDebug = SMTP::DEBUG_SERVER;

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = "tls";
$mail->SMTPAuth = true;
$mail->SMTPAutoTLS = true; 
//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = 'thrillforce.mh@gmail.com';

//Password to use for SMTP authentication
$mail->Password = 'fcpepuemkaanuxrj';
//From email address and name
$mail->From = "thrillforce.mh@gmail.com";
$mail->FromName = "Full Name";

//To address and name
$mail->addAddress("thrillforce.mh@gmail.com", "Thrill Security Force."); 

//Address to which recipient will reply
//$mail->addReplyTo("thrillforce.mh@gmail.com", "Reply");
 

//Send HTML or Plain Text email
$mail->isHTML(true);


$Subject = "Thrill Security Website Inquiry";
$name = Trim(stripslashes($_POST['name'])); 
$email = Trim(stripslashes($_POST['email'])); 
$phone = Trim(stripslashes($_POST['phone'])); 
$subject = Trim(stripslashes($_POST['subject'])); 
$message = Trim(stripslashes($_POST['message'])); 
$Body = "";
$Body .= "Name: ";
$Body .= $name;
$Body .= "<br>";

$Body .= "Email: ";
$Body .= $email;
$Body .= "<br>";
$Body .= "Phone: ";
$Body .= $phone;
$Body .= "<br>";
$Body .= "Subject: ";
$Body .= $subject;
$Body .= "<br>";
$Body .= "Comment: ";
$Body .= $message;
$Body .= "<br>";


$mail->Subject = $Subject;
$mail->Body =$Body;
$mail->AltBody = $Body;


$success = false;

try {
    $success = true;
    $mail->send();
    //echo "Message has been sent successfully";
} catch (Exception $e) {
    // echo "Mailer Error: " . $mail->ErrorInfo;
}

//  ini_set("SMTP","tls://smtp.gmail.com");
//  ini_set("smtp_port",587);

//   ini_set('sendmail_from','thrillforce.mh@gmail.com');

// $EmailTo = "contactharshkadam@gmail.com, thrillforce.mh@gmail.com";
// $EmailFrom = "ThrillSercurity, contact@thrillsecurity.com";

// $Subject = "Thrill Security Website Inquiry";
// $name = Trim(stripslashes($_POST['name'])); 
// $email = Trim(stripslashes($_POST['email'])); 
// $phone = Trim(stripslashes($_POST['phone'])); 
// $subject = Trim(stripslashes($_POST['subject'])); 
// $message = Trim(stripslashes($_POST['message'])); 




// // validation
// $validationOK=true;
// if (!$validationOK) {
//   print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
//   exit;
// }

// // prepare email body text
// $Body = "";
// $Body .= "Name: ";
// $Body .= $name;
// $Body .= "\n";

// $Body .= "Email: ";
// $Body .= $email;
// $Body .= "\n";
// $Body .= "Phone: ";
// $Body .= $phone;
// $Body .= "\n";
// $Body .= "Subject: ";
// $Body .= $subject;
// $Body .= "\n";
// $Body .= "Comment: ";
// $Body .= $message;
// $Body .= "\n";
// // send email 
// $success = mail($EmailTo, $Subject , $Body, "From: <$EmailFrom>");

// // redirect to success page 
// echo $success ;
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=index.php\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
}
// ?>