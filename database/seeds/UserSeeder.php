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
            'name' => 'Joachim',
            'email' => '1@1.dk',
            'password' => bcrypt('silke123')
        ]);
    }
}
