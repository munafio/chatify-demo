<?php

namespace Database\Seeders;

use App\Models\User;
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
        \App\Models\User::factory(10)->create();

        $u1 = User::create([
            'name' => 'test',
            'email' => 'test@gmail.com',
            'password' => Hash::make('12345678')

        ]);

        $u2 = User::create([
            'name' => 'test2',
            'email' => 'test2@gmail.com',
            'password' => Hash::make('12345678')

        ]);

        $u1 = User::create([
            'name' => 'test',
            'email' => 'test@gmail.com',
            'password' => Hash::make('12345678')

        ]);

        $u2 = User::create([
            'name' => 'test2',
            'email' => 'test2@gmail.com',
            'password' => Hash::make('12345678')

        ]);
        $u3 = User::create([
            'name' => 'test3',
            'email' => 'test3@gmail.com',
            'password' => Hash::make('12345678')

        ]);

        $u4 = User::create([
            'name' => 'test4',
            'email' => 'test4@gmail.com',
            'password' => Hash::make('12345678')

        ]);

        $u5 = User::create([
            'name' => 'test5',
            'email' => 'test5@gmail.com',
            'password' => Hash::make('12345678')
        ]);
    }
}
