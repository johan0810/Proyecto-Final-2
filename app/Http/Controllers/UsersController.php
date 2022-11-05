<?php

namespace App\Http\Controllers;

use App\Models\Answers;
use App\Models\User;
use Database\Seeders\DatabaseSeeder;
use Illuminate\Http\Request;
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
        // return view('create');
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
    public function update(Request $request, $id)
    {
        $users=User::find($id);
        $users->fill($request->all())->save();


     
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
