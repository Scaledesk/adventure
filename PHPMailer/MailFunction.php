<?php
require 'PHPMailerAutoload.php';
$mail = new PHPMailer;
$email=$_POST['email'];

$phone=$_POST['phone'];

$name=$_POST['name'];
$phoneInd=$_POST['phoneInd'];

// name email phone phoneInd
 // fname sname email phone message

  // $emailadmin="care@futureconsumer.in";
$emailadmin="nkscoder@gmail.com";
  
$subject = "Contact Us - Adventuria";



$message ='<html>
<body>
<div id="abcd" style="text-align:justify;font-size:18px;"> Name:-'.$name.'<br>Phone:-'.$phone.'<br>Email:-'.$email.'<br>PhoneInd :-'.$phoneInd. '</div>
</body>
</html>';


$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'nkscoder@gmail.com';                 // SMTP username
$mail->Password = 'n7827495599';                       // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;// TCP port to connect to
$mail->IsHTML(true);
$mail->setFrom('nkscoder@gmail.com', 'Adventuria');
//$mail->addAddress('ellen@example.com');               // Name is optional
$mail->addReplyTo('nkscoder@gmail.com', 'noreply');


// $mail->addAddress($email, $name);     // Add a recipient


$mail->addAddress($emailadmin);     // Add a recipient

$mail->Subject = $subject;
$mail->Body    = $message;

 $mail->SMTPDebug = 1; 




   
if($mail->send())
 {

   // echo "";
     header("location: ../index.html");

} else {
   
   header("location: ../index.html");
      // echo "";
     // header("location: ../contact.php?msg='<p class='error'>Some error occurred!</p>'");

      }
