<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function sendSmsNotificaition()
    {
        $basic  = new \Vonage\Client\Credentials\Basic("860aade7", "T6fE2K4ycU3yfxuP");
        $client = new \Vonage\Client($basic);
       //$basic  = new \Nexmo\Client\Credentials\Basic('Nexmo key', 'Nexmo secret');
        //$client = new \Nexmo\Client($basic);
 
        $message = $client->message()->send([
            'to' => '37068435814',
            'from' => 'KSDConnect',
            'text' => 'Testing SMS API'
        ]);
 
        dd('SMS message has been delivered.');
    }
}
