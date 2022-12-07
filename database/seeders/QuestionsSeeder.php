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

                'question' => '¿Cuantos sitios de parqueo brinda el Sena?',
            ],

            [
                'id' => 2,

                'question' => '¿En qué lugar está ubicado el gimnasio?
                ',
            ],

            [
                'id' => 3,

                'question' => '¿Cuantas plantas (pisos) tiene las instalaciones del Sena?',
            ],

            [
                'id' => 4,

                'question' => '¿Con cuantas oficinas administrativas consta el Sena en las instalaciones del CTA?',
            ],

            [
                'id' => 5,

                'question' => '¿En que piso podemos encontrar el ambiente de Gastronomía?',
            ],

            [
                'id' => 6,

                'question' => '¿El taller de mecánica trabaja con elevador hidráulico?',
            ],

            [
                'id' => 7,

                'question' => '¿En qué piso podemos encontrar el ambiente de redes y fibra óptica?',
            ],

            [
                'id' => 8,


                'question' => '¿De qué color es el nuevo Logo del Sena?',
            ],

            [
                'id' => 9,


                'question' => '¿Que significado tienen las siglas CTA?',
            ],

            [
                'id' => 10,


                'question' => '¿Cual es la cantidad de baños por piso que tienen acceso los Aprendices?',
            ],

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
