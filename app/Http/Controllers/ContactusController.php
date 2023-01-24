<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactusController extends Controller
{
    public function save(Request $request) 
    {
        // dd($request->all());
        // ContactUs::create([
        //     'first_name' => $request->first_name,
        //     'last_name' => $request->last_name,
        //     'email' => $request->email,
        //     'department' => $request->department,
        //     'message' => $request->message,
        // ]);


        $user = User::find(1);
        $details = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'department' => $request->department,
            'message' => $request->message,
        ];

        $user->notify(new \App\Notifications\ContactusNotification($details));

        toastr()->success('Message Send Successfully');

        return back();
        
    }
}