<?php

//Send the email mail
function send_mail($detail=array()){


    if(!empty($detail['to']) && !empty($detail['message']) && !empty($detail['subject']) && !empty($detail['from'])){
        $mail = new PHPMailer(true); 
        //$mail->SMTPDebug = 2;                                 // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'xxxx';                 // SMTP username
        $mail->Password = 'your-account-password';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to

        //Recipients
        $mail->setFrom('info@octajobs.com', $detail['from']);
        $mail->addAddress($detail['to'], '');     // Add a recipient

        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $detail['subject'];
        $mail->Body    = $detail['message'];
        //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            if(!$mail->send()) {
              return false;
            } else {
                return true;
            }

    }else{

        die('Your Mail Handler requires four main paramters');

    }
   


}