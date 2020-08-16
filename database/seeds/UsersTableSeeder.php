<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'role_id'   => 1,
            'username'  => 'admin',
            'name'      => 'Admin',
            'email'     => 'admin@gmail.com',
            'password'  => Hash::make('p01012000')
        ]);

        User::create([
            'role_id'   => 2,
            'username'  => 'author',
            'name'      => 'author',
            'email'     => 'author@gmail.com',
            'password'  => Hash::make('p01012000')
        ]);

    }
}
