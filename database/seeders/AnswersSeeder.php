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

                'description' => 'Admin',
                'is_admin' => '1'
            ],
            [
                //id: 2

                'description' => 'Aprendiz',
                'is_admin' => '0'
            ],
        ]);
    }
}
