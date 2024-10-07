<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';


function maillinge($recipient, $subject, $body, $replyto, $replytoname){
  
  $signature = '<p><span style="color:#09479B;font-size:20px">Bob & Bob Advocates - Website Form</span></p>';
  /*$hostname = 'smtp.cloudmta.net';
  $username = '7c3c506dea731b2f';
  $password = 'Mh812rKx4TQCm6XNTjmpGkGB';
  
  $transport = (new Swift_SmtpTransport($hostname, 2525, 'tls'))
    ->setUsername($username)
    ->setPassword($password);
  
  $mailer = new Swift_Mailer($transport);
  
  
  $message = (new Swift_Message())
    ->setSubject($subject)
    ->setFrom(['info@writtela.com' => 'Writtela'])
    ->setTo([$recipient]);
  
  $headers = ($message->getHeaders())
    -> addTextHeader('X-CloudMTA-Class', 'standard');
  
  $message->setBody(
    ''
  );
  $message->addPart($body.'<p>Thank you. <br/><span style="color:blue;font-size:20px">WRITTELA</span></p>', 'text/html');
  $mailer->send($message);*/
  
  
     //Set parameters:
     $senderEmail = "admin@writtela.com"; //Sender's email, E.g. sender@gmail.com
     $senderPass = "36987412Mm."; //Password of sender email account
     $recipient = $recipient; // Email of recipient. Where email is sent to.
     $subject = $subject; //Subject of the email
     $message = $body.$signature; //Email body/the message
  
  
     $mail = new PHPMailer(true);                             
     try {
         //Server settings
         $mail->isSMTP();                                     
         $mail->Host = 'smtp.hostinger.com';                      
         $mail->SMTPAuth = true;                               
         $mail->Username = $senderEmail;     
         $mail->Password = $senderPass;                    
         $mail->SMTPOptions = array(
             'ssl' => array(
             'verify_peer' => false,
             'verify_peer_name' => false,
             'allow_self_signed' => true
             )
         );                         
         $mail->SMTPSecure = 'ssl';                           
         $mail->Port = 465;                                   
  
         $mail->setFrom($senderEmail, 'Bob & Bob Website Forms');
         
         //Recipients
         $mail->addAddress($recipient);              
         $mail->addReplyTo($replyto, $replytoname);
         
         //Content
         $mail->isHTML(true);                                  
         $mail->Subject = $subject;
         $mail->Body    = $message;
  
         $mail->send();
  
         // What happens if email is sent
     } 
     catch (Exception $e) {
             // What happens if email is not sent 
             //echo $e;
     }			
  
  }
?>