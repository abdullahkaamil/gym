<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create User
        User::create([
            'name' => 'kaamil',
            'email' => 'akaamil@outlook.com',
            'password' => bcrypt('password'),
            'status' => '1',
        ]);
    }
}
