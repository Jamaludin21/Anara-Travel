<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'avatar' => 'required|mimes:jpeg,jpg,png',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'avatar' => $request->avatar
        ]);

         if ($request->hasFile('avatar')) {
            $profilePicture = $request->file('avatar');
            $path = $profilePicture->store('avatar', 'public');
            $user->avatar = $path;
        }

        // if($request->hasFile('avatar')){
        //     $filename = $request->file('avatar');
        //     $request->avatar->storeAs('avatar',$filename,'public');
        //     $user->avatar = $request;
        // }

        $user->save();

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }

    // public function upload(Request $request)
    // {
    //     if($request->hasFile('avatar')){
    //       $filename = $request->avatar->getClientOriginalName();
    //         $request->avatar->storeAs('avatar',$filename,'public');
    //         Auth()->user()->update(['avatar'=>$filename]);
    //     }
    //     return redirect()->back();
    // }
}