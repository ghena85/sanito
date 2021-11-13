<?php

namespace App\Http\Controllers\Api\V1;

use App\Traits\APIExceptionTrait;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\ApiController;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Validator;

class SubscribeController extends ApiController
{
    public function subscribeNow(Request $request)
    {
        
        $data['email'] = $request->email;

        $valid = Validator::make($request->all(),[
            'email' => 'required|email'
        ]);


        if($valid->fails()){
            $message = "Ati introdus emailul gresit";
        }else{
            $message = "V-ati abonat cu succes";
        }

        send(env('TO_EMAIL'),'Subscribe to News' ,$data, 'subscribe');

        return[
            'message' => $message
        ];

        // return redirect()->back()->with('message', 'Transmis cu success.');
    }

}
