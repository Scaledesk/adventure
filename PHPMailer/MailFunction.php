<?php
require 'PHPMailerAutoload.php';
$mail = new PHPMailer;
$email=$_POST['email'];

$phone=$_POST['phone'];

$name=$_POST['name'];
$phoneInd=$_POST['phoneInd'];

// name email phone phoneInd
 // fname sname email phone message

 		
$emailadmin="sanchit2411@gmail.com";

$emailadmin1="adventuria.social@gmail.com";

$emailadmin2="nittin@adventuria.in";
$emailadmin3="pankaaj@adventuria.in";

  
$subject = "Contact Us - Adventuria";



$message ='<html>
<body>
<div id="abcd" style="text-align:justify;font-size:18px;"> Name:-'.$name.'<br>Phone:-'.$phone.'<br>Email:-'.$email.'<br>PhoneInd :-'.$phoneInd. '</div>
</body>
</html>';


$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'adventuria.social@gmail.com';                 // SMTP username
$mail->Password = 'n9211411038';                       // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;// TCP port to connect to
$mail->IsHTML(true);
$mail->setFrom('adventuria.social@gmail.com', 'Adventuria');
//$mail->addAddress('ellen@example.com');               // Name is optional
$mail->addReplyTo('adventuria.social@gmail.com', 'noreply');


// $mail->addAddress($email, $name);     // Add a recipient


$mail->addAddress($emailadmin); 
$mail->addAddress($emailadmin1); 
$mail->addAddress($emailadmin2);     // Add a recipient
$mail->addAddress($emailadmin3); 

$mail->Subject = $subject;
$mail->Body    = $message;

 //$mail->SMTPDebug = 1; 




   
if($mail->send()){exit(header("Location:/index.html"));}else{exit(header("Location:/index.html"));}?>


