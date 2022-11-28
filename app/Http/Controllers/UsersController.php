<?php

namespace App\Http\Controllers;

use App\Models\Answers;
use App\Models\User;
use Database\Seeders\DatabaseSeeder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\Console\Question\Question;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_user = User::orderBy('name', 'asc')->get();
        return response(['users' => $list_user]); //->shuffle()]);
        // return $list_questions;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $validated= $request->validate([
        //     'question' => 'requiered|regex:/^[0-9a-zA-ZÑñ\-_s]'
        // ]);

        $new_user = User::create($request->all());
        $new_user->save();

        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
            'type_dni' => 'string',
            'dni' => 'digits_between:1,10|numeric',
            'phone' => 'digits_between:1,10|numeric',
            'image' => 'nullable|image'
        ]);



        $url_image = $this->validate_image($request);


        $users = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'type_dni' => $request->type_dni,
            'dni' => $request->dni,
            'phone' => $request->phone,
            'image' => $url_image,

        ]);

        return response(
            [
                'message' => 'Cliente creado exitósamente.',
                'new_user' => $users //Nuevo usuario creado
            ]
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Questions  $questions
     * @return \Illuminate\Http\Response
     */
    // public function show(User $users) //id de la pregunta
    // {
    //     return response(
    //         [
    //             'answer_list' => Questions::find($questions)->answers_list()
    //         ]
    //     );
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Questions  $questions
     * @return \Illuminate\Http\Response
     */
    // public function edit(Questions $questions)
    // {
    //     return view('update',['question'=> $questions]);
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Questions  $questions
     * @return \Illuminate\Http\Response
     */


     ////////////////////////////////////777
     
    public function update(Request $request, $id)
    {
        $users = User::find($id);
        $users->fill($request->all())->save();


        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email,' . $users->id,
        ]);

        //Guardar nueva imagen
        if ($request->updated) {

            $request->validate([
                'image' => 'nullable|image'
            ]);

            //Eliminar la imagen anterior
            if (File::exists(public_path($users->image)))
                File::delete(public_path($users->image));

            $users->image = $this->validate_image($request);
        }

        $users->name = $request->name;
        $users->email = $request->email;
        // $users->save();

        return response([
            'message' => 'Cliente actualizado exitósamente.',
        ]);
    }



    /////////////////////////////

    public function restore($id)
    {
        $users = User::withTrashed()->find($id); //withTrashed() to find soft-deleted users
        $users->restore();

        return response([
            'message' => 'Cliente restablecido exitósamente.'
        ]);
    }

    //////////////////////////////////77


    public function validate_image($request)
    {

        if ($request->hasfile('image')) {
            $name = uniqid() . time() . '.' . $request->file('image')->getClientOriginalExtension(); //46464611435281365.jpg
            $request->file('image')->storeAs('public', $name);
            return '/storage' . '/' . $name; //uploads/46464611435281365.jpg

        } else {

            return null;
        }
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Questions  $questions
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users = User::find($id);
        $users->delete();
    }

    public function delete_all()
    {
        $users = User::truncate();
        $seeder = new DatabaseSeeder;
        $seeder->run();
    }
}
