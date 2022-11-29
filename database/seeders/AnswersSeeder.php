<?php

namespace Database\Seeders;

use App\Models\Answers;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnswersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Answers::insert([
            [
                //id: 1

                'options' => 'humanidad',
                'answer' => '1',
                'questions_id' => '1',
            ],
            [
                //id: 1
                'options' => 'humano',
                'answer' => '0',
                'questions_id' => '1',

            ],
            [
                //id: 1

                'options' => 'barba',
                'answer' => '0',
                'questions_id' => '1',
            ],
            [
                //id: 1
                'options' => 'estómago',
                'answer' => '0',
                'questions_id' => '1',
                
            ],


            //////////////////////////////////

            [
                //id: 2

                'options' => 'hombro',
                'answer' => '1',
                'questions_id' => '2',
            ],
            [
                //id: 2
                'options' => 'espíritu',
                'answer' => '0',
                'questions_id' => '2',

            ],
            [
                //id: 2

                'options' => 'espalda',
                'answer' => '0',
                'questions_id' => '2',
            ],
            [
                //id: 2
                'options' => 'resfriado',
                'answer' => '0',
                'questions_id' => '2',
                
            ],

              //////////////////////////////////

              [
                //id: 3

                'options' => 'hermano, hermana',
                'answer' => '1',
                'questions_id' => '3',
            ],
            [
                //id: 3
                'options' => 'bisabuelo, bisabuela',
                'answer' => '0',
                'questions_id' => '3',

            ],
            [
                //id: 3

                'options' => 'bisnieto, bisnieta',
                'answer' => '0',
                'questions_id' => '3',
            ],
            [
                //id: 3
                'options' => 'criatura',
                'answer' => '0',
                'questions_id' => '3',
                
            ],
        ]);
    }
}
