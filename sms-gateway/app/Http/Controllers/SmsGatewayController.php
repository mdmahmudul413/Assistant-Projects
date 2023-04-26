<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SmsGatewayController extends Controller
{
    public function sms_send(){
        $url = "http://bulksmsbd.net/api/smsapi";
        $api_key = "9yKm0n6j5ZvyUIvKvWE7";
        $senderid = "8809617611038";
        $number = "01983730531";
        $message = "Aita ki 2441139";
    
        $data = [
            "api_key" => $api_key,
            "senderid" => $senderid,
            "number" => $number,
            "message" => $message
        ];
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $response = curl_exec($ch);
        curl_close($ch);
        return $response;
        }
}
