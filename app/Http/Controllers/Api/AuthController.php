<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller {

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
            'type_dni' => $request->type_dni,
            'dni' => $request->dni,
            'phone'=>$request->phone,
        ]);

        // $new_user = User::create($request->all());
        // $new_user->save();

        return response([
            'user' => $user,
            'token' => $user->createToken('secret')->plainTextToken
        ]);
    }

    public function login(Request $request) {

        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        $credentials =$request->only('email', 'password');


        if (!Auth::attempt($credentials)) {
            return response([
                'message' => 'Credenciales incorrectas.'
            ], 403);
        }

        return response([
            'user' =>  $request->user(),
            'roles' => $request->user()->roles->description, //User role code (A: amdin, U: user)
            'token' => $request->user()->createToken('secret')->plainTextToken
        ], 200);


        // return view('account',['user'=>$request->user()]);

    }

    public function logout(Request $request) {
        $request->user()->tokens()->delete();
        return response([
            'message' => 'La sesión se cerró correctamente.'
        ], 200);

        // return redirect()->route('login');
    }

    //* GET USER DATA
    public function user() {

        return response([
            'user' => auth()->user()
        ], 200);
    }
}