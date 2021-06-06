<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Demo User',
                'email' => 'demo@e.com',
                'password' => bcrypt('demo1234'),
                'avatar' => 'chatify-logo.png'
            ],
            [
                'name' => 'Munaf A. Mahdi',
                'email' => 'info@munafio.com',
                'password' => bcrypt('google11'),
                'avatar' => 'munafio.jpg'
            ],
            [
                'name' => 'Abdulmuaz Aqeel',
                'email' => 'devmuaz@e.com',
                'password' => bcrypt('google11'),
                'avatar' => 'devmuaz.jpg'
            ],
        ];

        foreach ($users as $user) {
            \App\Models\User::create($user);
        }
    }
}
