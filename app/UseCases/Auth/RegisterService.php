<?php


namespace App\UseCases\Auth;


use App\Http\Requests\Auth\RegisterRequest;
use App\Mail\Auth\VerifyMail;
use App\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Mail;

class RegisterService
{
    public function register(RegisterRequest $request){
        $user = User::register(
            $request['name'],
            $request['email'],
            $request['password']
        );
        Mail::to($user->email)->send(new VerifyMail($user));
        event(new Registered($user));
    }
    public function verify($id): void
    {
      $user = User::findOrFail($id);
      $user->verify();
    }

}
