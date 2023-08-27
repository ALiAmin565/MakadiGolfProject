<?php

namespace App\Http\Controllers;


use App\Mail\Subscribe;
use App\Models\Subscriber;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class SubscriberController extends Controller
{
    public function subscribe(Request $request){
        $validator = Validator::make($request->all(),[
            'firstname' =>'required|string|max:255',
            'lastname' =>'required|string|max:255',
            'number' => 'required|numeric|digits_between:10,14',
            'email' => 'required|email|unique:subscribers',
            'message' => 'required|string',
        ]);
        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }
        $email = $request->all()['email'];
        $name = $request->all()['firstname'] . ' ' . $request->all()['lastname'];
        $subscriber = Subscriber::create($request->all());
        if ($subscriber) {
            Mail::to($email)->send(new Subscribe($email, $name));
            return back()->with('success', 'Thank you for subscribing to our email, please check your inbox');
        }
    }
}
