<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function sendSmsNotificaition()
    {
        //dd($request);
        $basic  = new \Vonage\Client\Credentials\Basic("860aade7", "T6fE2K4ycU3yfxuP");
        $client = new \Vonage\Client($basic);

        //$basic  = new \Nexmo\Client\Credentials\Basic('Nexmo key', 'Nexmo secret');
        //$client = new \Nexmo\Client($basic);
        //dd($to, $text);
        $message = $client->message()->send([
            'to' => '37068435814',
            'from' => 'KSDConnect',
            'text' => 'Turite nauja pranesima Connexa platformoje'
        ]);
        return back();
    }
}
