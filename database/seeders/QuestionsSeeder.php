<?php

namespace Database\Seeders;

use App\Models\Questions;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Questions::factory(20)->create();

        Questions::insert([
            [

                'id' => 1,

                'question' => '¿Cómo sería para ti un día perfecto?',
            ],

            [
                'id' => 2,

                'question' => '¿Qué es algo que no soportas de la sociedad?
                ',
            ],

            [
                'id' => 3,

                'question' => '¿Cuál es la peor cita que has tenido en la vida?',
            ],

            // [
            //     'id' => 4,

            //     'question' => '¿Cuál es la mayor locura que has hecho por amor?',
            // ],

            // [
            //     'id' => 5,

            //     'question' => '¿Crees que el amor puede durar para siempre?',
            // ],

            // [
            //     'id' => 6,

            //     'question' => '¿Te resulta fácil confiar en los demás?',
            // ],

            // [
            //     'id' => 7,

            //     'question' => 'Si pudieras tener un superpoder, ¿cuál sería?',
            // ],

            // [
            //     'id' => 8,


            //     'question' => 'Si pudieras cambiar una sola cosa de ti, ¿cuál sería?',
            // ],

            // [
            //     'id' => 9,


            //     'question' => '¿Qué música te hace pensar en los momentos más felices de tu vida?',
            // ],

            // [
            //     'id' => 10,


            //     'question' => '¿Qué tipo de música o canción define mejor tu personalidad?',
            // ],

            // [

            //     'question' => '',
            // ],

            // [

            //     'question' => '',
            // ],

            // [

            //     'question' => '',
            // ],

            // [

            //     'question' => '',
            // ],

            // [

            //     'question' => '',
            // ],

            // [

            //     'question' => '',
            // ],

            // [

            //     'question' => '',
            // ],

            // [

            //     'question' => '',
            // ],

            // [

            //     'question' => '',
            // ],

            // [

            //     'question' => '',
            // ],

            // [

            //     'question' => '',
            // ],

            // [

            //     'question' => '',
            // ],

            // [

            //     'question' => '',
            // ],

            // [

            //     'question' => '',
            // ],

            // [

            //     'question' => '',
            // ],

            // [

            //     'question' => '',
            // ],

            // [

            //     'question' => '',
            // ],

            // [

            //     'question' => '',
            // ],

            // [

            //     'question' => '',
            // ],

            // [

            //     'question' => '',
            // ],
            
        ]);
    }
}
