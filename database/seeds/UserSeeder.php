<?php

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
        \App\User::create([
            'name' => 'Demo',
            'email' => 'demo@gmail.com',
            'password' => \Illuminate\Support\Facades\Hash::make('password'),
        ]);
        \App\User::create([
            'name' => 'Abc',
            'email' => 'abc@gmail.com',
            'password' => \Illuminate\Support\Facades\Hash::make('password'),
        ]);
    }
}
