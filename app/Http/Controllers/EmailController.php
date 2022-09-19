<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function send(Request $request)
    {
        $name = htmlentities($request->post('name'));
        $email = filter_var($request->post('email'), FILTER_SANITIZE_EMAIL);
        $phone = htmlentities($request->post('phone'));
        $message = htmlentities($request->post('message'));

        $to = 'welcome@trembit.com';
        $subject = $name.' via ContactForm';
        $message = 'name: '.$name.', phone: '.$phone.', message: '.$message;
        $headers = 'From: messages-noreply@trembit.com' . "\r\n" .
            'Reply-To:'.$email."\r\n" .
            'X-Mailer: PHP/' . phpversion();


        $domain_url = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://{$_SERVER["HTTP_HOST"]}";

        header("Content-Type: application/json");
        header("Access-Control-Allow-Credentials: true");
        header("AMP-Same-Origin: true");
        header("Access-Control-Allow-Origin: ". str_replace('.', '-','https://preview.trembit.com') .".cdn.ampproject.org");
        header("AMP-Access-ConHtrol-Allow-Source-Origin: ".$domain_url);


        if(!mail($to, $subject, $message, $headers)){
            header("HTTP/1.0 412 Precondition Failed", true, 412);
            echo json_encode(array('errormsg'=>'There is some error while sending email!'));
            die();
        }
        header("Access-Control-Expose-Headers: AMP-Access-Control-Allow-Source-Origin");
        echo json_encode(array('successmsg'=>$_POST['name'].'My success message. [It will be displayed shortly(!) if with redirect]'));
        die();
    }
}
