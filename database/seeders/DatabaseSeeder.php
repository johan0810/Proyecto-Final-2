<?php

namespace Database\Seeders;
// use App\Models\Questions;


use App\Models\User;
use Database\Seeders\Questions as SeedersQuestions;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
       

        //CREATE AND ADMIN USER
        User::insert(
            [
                'roles_id' =>  1, //admin role id
                'name' =>  'admin', //default name
                'email' => 'admin@admin.com', //default email
                'type_dni' => 'CC', //default Type dni
                'dni' => '1111111111', //default dni
                'phone' => '1111111111', //default phone
                'approved' => '1', //default approved
                'email_verified_at' => date("Y/m/d"), //verified today
                'created_at' => date("Y/m/d"), //created today
                'password' => Hash::make('admin123') //default admin password: admin123
            ],

            [
                'roles_id' =>  2, //admin role id
                'name' =>  'Johan Quiñones', //default name
                'email' => 'feliperomero978@hotmail.com', //default email
                'type_dni' => 'CC', //default Type dni
                'dni' => '1111111111', //default dni
                'phone' => '1111111111', //default phone
                'approved' => '0', //default approved
                'email_verified_at' => date("Y/m/d"), //verified today
                'created_at' => date("Y/m/d"), //created today
                'password' => Hash::make('felipe12') //default admin password: admin123
            ]
        );

       
    }
}
