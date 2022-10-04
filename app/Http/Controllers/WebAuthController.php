<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class WebAuthController extends Controller {

    public function register(Request $request) {

        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
            'type_dni' => 'string',   
            'dni' => 'digits_between:1,10|numeric',
            'phone' => 'digits_between:1,10|numeric'
        ]);



        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            // 'type_dni' => $request->type_dni,
            // 'dni' => $request->dni,
            // 'phone'=>$request->phone,
            
        ]);

        // $new_user = User::create($request->all());
        // $new_user->save();

        return redirect()
            ->route('viewlogin')
            ->with(['message'=>'Te has registrado']);
            
    }

    public function login(Request $request) {

        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        
    
        $credentials =$request->only('email', 'password');


        if (!Auth::attempt($credentials)) {
            return redirect()->back()->withErrors(
                'message', 'Credenciales incorrectas.'
            );
        }

        // return response([
        //     'user' =>  $request->user(),
        //     'token' => $request->user()->createToken('secret')->plainTextToken
        // ], 200);

        
        return view('account',['user'=>$request->user()]);

    }

    public function logout(Request $request) {
        $request->user()->tokens()->delete();
        return redirect()
        ->route('viewlogin')
        ->with('message','La sesión se cerró correctamente.' );

        // return redirect()->route('login');
    }

    //* GET USER DATA
    public function user() {

        return response([
            'user' => auth()->user()
        ], 200);
    }
}