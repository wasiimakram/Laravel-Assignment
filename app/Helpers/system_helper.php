<?php

use App\Mail\MassMail;
use Illuminate\Support\Facades\Mail;
use App\Models\Back\Property\Feature;
use App\Models\Back\Property\Property;
if (!function_exists('ajax_make_image_resize')){
    function ajax_make_image_resize($imageName,$oldImage,$mediumArr){
        if (!empty($imageName))
        {
            // Resize Image
            $img = public_path($mediumArr['path']).$imageName;
            Image::make($oldImage)->resize($mediumArr['width'],$mediumArr['height'])->save($img);

            return $imageName;

        }

        return false;
    }
}
if (!function_exists('base_url')){
    function base_url(){
        return env('APP_URL');
    }
}
if (!function_exists('admin_url')){
    function admin_url(){
        return env('APP_URL').'adminarea/';
    }
}
if (!function_exists('asset_url')){
    function asset_url(){
        return env('APP_URL').'public/';
    }
}

function send_email_to_company($email){
    $to=$email;
    $mail = Mail::to($to);
    $body='Welcome to our System.';
    $subject="Company Registration Email";
    $fromEmail=env('MAIL_FROM_ADDRESS');
    $fromName='Laravel App';
    $mail->send(new MassMail($body,$subject,$fromEmail,$fromName));
}