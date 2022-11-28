<?php

namespace App\Http\Controllers;

use App\Models\Answers;
use App\Models\Questions;
use Illuminate\Http\Request;
use Symfony\Component\Console\Question\Question;

class QuestionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_questions = Questions::orderBy('question', 'asc')->get();
        return response(['question' => $list_questions]); //->shuffle()]);
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

        $new_question = Questions::create($request->all());
        $new_question->save();
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Questions  $questions
     * @return \Illuminate\Http\Response
     */
    public function show(Questions $questions) //id de la pregunta
    {
        return response(
            [
                'answer_list' => Questions::find($questions)->answers_list()
            ]
        );
    }

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
        $questions=Questions::find($id);
        $questions->fill($request->all())->save();


     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Questions  $questions
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $questions = Questions::find($id);
        $questions->delete();
    }
}
