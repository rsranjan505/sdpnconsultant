<?php
    $name= $_POST['name'];
    $email= $_POST['email'];
    $mobile= $_POST['mobile'];
    $subject= $_POST['subject'];
    $message= $_POST['message'];

    if(isset($name) && isset($email) && isset($mobile) && isset($message) ) {

        $message = [
            'contact_email' => 'contact@maventrg.com',
            'name' => $name,
            'mobile' => $mobile,
            'email' => $email,
            'subject' => $subject,
            'msg' => $message,
        ];

        $sent = send_email($message);
        
        if($sent){
            http_response_code(200);
            $data =["status"=>"success",
                    "message" => "Message sent successfully",
                    "data" => "OK"];
           
        }else{
            http_response_code(400);
            $data =[ "status"=>"error",
                    "message" => "Message not sent"];
        }
        header('Content-type: application/json');
        echo json_encode($data);
        
    }

    function send_email($data) {

        $to      = $data['contact_email'];
        $name = $data['name'];
        $email = $data['email'];
        $mobile = $data['mobile'];
        $subject = $data['subject'];
        $message = $data['msg'];
        $headers = 'From: '.$data['msg']       . "\r\n" .
                     'Reply-To: '.$data['contact_email'] . "\r\n" .
                     'X-Mailer: PHP/' . phpversion();

        $message_data =nl2br('Nmae:-'.$name."\n"
                        .'Email:-'.$email."\n"
                        .'Phone:-'.$mobile."\n"
                        .'Subject:-'.$subject."\n"
                        .'Message:-'.$message."\n");
    
        if(mail($to, $subject, $message_data, $headers)){
            return true;
        }
        return false;
   }


   //not use
   function oldfunmail(){

        $to = 'user_request@finmet.in';
        $firstname = $_POST["fname"];
        $email= $_POST["email"];
        $city= $_POST["city"];
        $text= $_POST["message"];
        $phone= $_POST["phone"];
        
    
    
        $headers = 'MIME-Version: 1.0' . "\r\n";
        $headers .= "From:  User Request : ". $email . "\r\n"; // Sender's E-mail
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    
        $message ='<table style="width:100%">
            <tr>
                <td>'.$firstname.'</td>
            </tr>
            <tr><td>Email: '.$email.'</td></tr>
            <tr><td>City: '.$city.'</td></tr>
            <tr><td>phone: '.$phone.'</td></tr>
            <tr><td>Message: '.$text.'</td></tr>
            
        </table>';
    
        if (@mail($to, $email, $message, $headers))
        {
            echo '<div style = "color:#199E04;font-size:24px;"> The message has been sent. We will contact soon.</div>';
        }else{
            echo 'failed';
        }
   }



?>