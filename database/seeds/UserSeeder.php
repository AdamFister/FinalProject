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
        {
            \App\User::create([
                'name' => 'User1',
                'email' => 'user@user.com',
                'email_verified_at' => now(),
                'password' => bcrypt('Password'),
                'admin' => 0,
                'approved_at' => now(),
            ]);
        }
    }
}