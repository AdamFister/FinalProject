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
                'name' => 'Ringo',
                'email' => 'ringo@ringo.com',
                'email_verified_at' => now(),
                'password' => bcrypt('Password'),
                'admin' => 0,
                'approved_at' => now(),
            ]);

            \App\User::create([
                'name' => 'Harry',
                'email' => 'harry@harry.com',
                'email_verified_at' => now(),
                'password' => bcrypt('Password'),
                'admin' => 0,
                'approved_at' => now(),
            ]);

            \App\User::create([
                'name' => 'George',
                'email' => 'george@george.com',
                'email_verified_at' => now(),
                'password' => bcrypt('Password'),
                'admin' => 0,
                'approved_at' => now(),
            ]);

            \App\User::create([
                'name' => 'Paul',
                'email' => 'paul@paul.com',
                'email_verified_at' => now(),
                'password' => bcrypt('Password'),
                'admin' => 0,
                'approved_at' => now(),
            ]);

            \App\User::create([
                'name' => 'John',
                'email' => 'john@john.com',
                'email_verified_at' => now(),
                'password' => bcrypt('Password'),
                'admin' => 0,
                'approved_at' => now(),
            ]);
        }
    }
}