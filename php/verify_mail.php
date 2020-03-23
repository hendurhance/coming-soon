<?php

require_once 'config.php';

if(isset($_GET['code'])){
    
    $code = $_GET['code'];

    $result = $dbconect->query("SELECT * FROM subscribers WHERE reset_code='$code'");
    
    
     if($result->num_rows==1){
        
        $data = $result->fetch_object();
        
        if($data->reset_code==$code){
            
            $dbconnect->query("UPDATE subscribers SET is_active=1, reset_code='' WHERE reset_code='$code'");

             $message = "Hi! You can download OctaJobs Newsletter ebook from <a href=https://coming-soon.me/ebook.pdf'>here</a>.";

             send_mail([
                 'to' => $data->email,
                 'from' => 'Octa Jobs',
                 'message' => $message,
                 'subject' => 'Verify Email'
             ]);
            
            $_SESSION['msg'] = 'Congratulations! eBook has been sent to your email address. Please, check your email and download your free ebook.';
        }
  
    }else{
        $_SESSION['msg']='Record not found';
       
    }
    
     header('Location: ../index.php');
}