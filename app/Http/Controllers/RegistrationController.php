<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\Welcome;

use App\User;

class RegistrationController extends Controller
{
    public function create()
    {

        return view('registration.create');
        
    }

    public function store()
    {

        $this->validate(request(), [

            'name'  =>  'required',

            'email' =>  'required|email',

            'password' =>  'required|confirmed'

        ]);

        // $user = User::create(request(['name', 'email', 'password']));

        $user = User::create([

            'name' => request('name'),

            'email' => request('email'),

            'password' => bcrypt(request('password'))
            
        ]);

        auth()->login($user);
        
         \Mail::to($user)->send(new Welcome($user));


        session()->flash('message', 'Thank you for registering');

        return redirect()->home();


    }

}
