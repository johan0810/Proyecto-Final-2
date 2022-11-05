<?php

namespace Database\Seeders;

use App\Models\Roles;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Roles::insert([
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
