<?php

require_once 'config.php';


if(isset($_POST['subscribe'])){
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    
    $result = $dbconnect->query("SELECT * FROM subscribers WHERE email = '$email'");

    if ($result->num_rows) {
        $_SESSION['msg'] = 'Sorry, Email already exists!';
    }else{
        $code = md5(crypt(rand(), 'aa'));

        $dbconnect->query("INSERT INTO subscribers (emailt, reset_code) VALUES ('$email', '$code')");
        $_SESSION['msg'] = 'Kindly check your email to confirm your subscription.';
        $message = "Hi! You just subscribed to OctaJobs Newsletter. You need to verify your email. Please, verify by clicking <a href='https://coming-soon.me/php/verify_email.php?code=$code'>here</a>.";

            send_mail([
                'to' => $email,
                'from' => 'OctaJobs',
                'message' => $message,
                'subject' => 'Verify Email'
            ]);

    }

    header('Location: ../index.php');
    
}