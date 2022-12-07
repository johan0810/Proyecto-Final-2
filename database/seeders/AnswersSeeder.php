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

                'options' => 'Con 3',
                'answer' => '1',
                'questions_id' => '1',
            ],
            [
                //id: 1
                'options' => 'Con 1',
                'answer' => '0',
                'questions_id' => '1',

            ],
            [
                //id: 1

                'options' => 'Con 2',
                'answer' => '0',
                'questions_id' => '1',
            ],
            [
                //id: 1
                'options' => 'Con 9',
                'answer' => '0',
                'questions_id' => '1',
                
            ],


            //////////////////////////////////

            [
                //id: 2

                'options' => 'En la parte trasera de la edificación, justo al lado de la cancha de Voley',
                'answer' => '1',
                'questions_id' => '2',
            ],
            [
                //id: 2
                'options' => 'Al frente de las oficinas de bienestar del Aprendiz ',
                'answer' => '0',
                'questions_id' => '2',

            ],
            [
                //id: 2

                'options' => 'En la segunda planta al lado de los baños',
                'answer' => '0',
                'questions_id' => '2',
            ],
            [
                //id: 2
                'options' => 'Justo enfrente de la Cafetería en ese amplio espacio',
                'answer' => '0',
                'questions_id' => '2',
                
            ],

              //////////////////////////////////

              [
                //id: 3

                'options' => 'Tiene 3 plantas',
                'answer' => '1',
                'questions_id' => '3',
            ],
            [
                //id: 3
                'options' => 'Solo tiene 1 planta',
                'answer' => '0',
                'questions_id' => '3',

            ],
            [
                //id: 3

                'options' => 'Consta de 5 plantas',
                'answer' => '0',
                'questions_id' => '3',
            ],
            [
                //id: 3
                'options' => 'Aproximadamente tiene 2 plantas',
                'answer' => '0',
                'questions_id' => '3',
                
            ],



               //////////////////////////////////

               [
                //id: 4

                'options' => 'Consta solo con una oficina',
                'answer' => '1',
                'questions_id' => '4',
            ],
            [
                //id: 3
                'options' => 'Consta con 3 Oficinas',
                'answer' => '0',
                'questions_id' => '4',

            ],
            [
                //id: 4

                'options' => 'Tiene 2 oficinas en el segundo piso',
                'answer' => '0',
                'questions_id' => '4',
            ],
            [
                //id: 4
                'options' => 'Tiene 5 oficinas en CTA',
                'answer' => '0',
                'questions_id' => '4',
                
            ],

               //////////////////////////////////

               [
                //id: 5

                'options' => 'Primer Piso',
                'answer' => '1',
                'questions_id' => '5',
            ],
            [
                //id: 5
                'options' => 'Segundo Piso',
                'answer' => '0',
                'questions_id' => '5',

            ],
            [
                //id: 5

                'options' => 'Tercer Piso',
                'answer' => '0',
                'questions_id' => '5',
            ],
            [
                //id: 5
                'options' => 'Quinto Piso',
                'answer' => '0',
                'questions_id' => '5',
                
            ],

               //////////////////////////////////

               [
                //id: 6

                'options' => 'Verdadero',
                'answer' => '1',
                'questions_id' => '6',
            ],
            [
                //id:6
                'options' => 'Falso',
                'answer' => '0',
                'questions_id' => '6',

            ],
            // [
            //     //id:6

            //     'options' => 'Consta de 5 plantas',
            //     'answer' => '0',
            //     'questions_id' => '6',
            // ],
            // [
            //     //id: 6
            //     'options' => 'Aproximadamente tiene 2 plantas',
            //     'answer' => '0',
            //     'questions_id' => '6',
                
            // ],

               //////////////////////////////////

               [
                //id: 7

                'options' => 'En el Segundo Piso',
                'answer' => '1',
                'questions_id' => '7',
            ],
            [
                //id:7
                'options' => 'No hay ambiente de redes y fibra óptica',
                'answer' => '0',
                'questions_id' => '7',

            ],
            [
                //id: 7

                'options' => 'En todos los Pisos hay uno',
                'answer' => '0',
                'questions_id' => '7',
            ],
            [
                //id: 7
                'options' => 'En el Primer Piso ',
                'answer' => '0',
                'questions_id' => '7',
                
            ],

               //////////////////////////////////

               [
                //id: 8

                'options' => 'Es de color Verde',
                'answer' => '1',
                'questions_id' => '8',
            ],
            [
                //id: 8
                'options' => 'Es de color Naranja',
                'answer' => '0',
                'questions_id' => '8',

            ],
            [
                //id:8

                'options' => 'Es de color Azul',
                'answer' => '0',
                'questions_id' => '8',
            ],
            [
                //id: 8
                'options' => 'Naranja con Azul',
                'answer' => '0',
                'questions_id' => '8',
                
            ],

               //////////////////////////////////

               [
                //id: 9

                'options' => 'Centro Tecnologico de la Amazonia',
                'answer' => '1',
                'questions_id' => '9',
            ],
            [
                //id: 9
                'options' => 'Convivencia Transparente de Aprendices',
                'answer' => '0',
                'questions_id' => '9',

            ],
            [
                //id: 9

                'options' => 'Control Tecnologico de Avaces',
                'answer' => '0',
                'questions_id' => '9',
            ],
            // [
            //     //id: 9
            //     'options' => 'Aproximadamente tiene 2 plantas',
            //     'answer' => '0',
            //     'questions_id' => '9',
                
            // ],

               //////////////////////////////////

               [
                //id: 10

                'options' => 'Tienen acceso a un baño por piso ',
                'answer' => '1',
                'questions_id' => '10',
            ],
            [
                //id: 10
                'options' => 'No tienen acceso a ninguno',
                'answer' => '0',
                'questions_id' => '10',

            ],
            [
                //id: 10

                'options' => 'Solo tienen acceso al baño de primer piso ',
                'answer' => '0',
                'questions_id' => '10',
            ],
            [
                //id: 10
                'options' => 'Tienen acceso a 5 baños por piso',
                'answer' => '0',
                'questions_id' => '10',
                
            ],
        ]);
    }
}
