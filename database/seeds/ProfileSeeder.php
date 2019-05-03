<?php

use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            \App\Profile::create([
                'nickname' => 'Admin',
                'user_id' => 1
            ]);

            \App\Profile::create([
                'nickname' => 'Ringo',
                'user_id' => 2,
                'photo' => 'images/4yVsZTaeEtm3rIMw02mTfjG1W9GGUbR2kPyF1Yzv.jpeg',
                'genre' => 'rock and roll',
                'city' => 'Liverpool, England',
                'age' => '28'
            ]);

            \App\Profile::create([
                'nickname' => 'Freddie',
                'user_id' => 3,
                'photo' => 'images/StaOXXQ6MBzydMBcr4GOqvmyhrLTGxQZxgMjov6r.jpeg',
                'genre' => 'rock and roll',
                'city' => 'London, England',
                'age' => '40'
            ]);

            \App\Profile::create([
                'nickname' => 'George',
                'user_id' => 4,
                'photo' => 'images/1mlHO8DxsXDoFTfQgc7E4eYUVJwEB41pUJGwMVo1.jpeg',
                'genre' => 'rock and roll',
                'city' => 'Liverpool, England',
                'age' => '25'
            ]);

            \App\Profile::create([
                'nickname' => 'Paul',
                'user_id' => 5,
                'photo' => 'images/WxnmKs99nz0LQPsKFlTyq2ywcPpmmbDAn6gKlCdL.jpeg',
                'genre' => 'rock and roll',
                'city' => 'Liverpool, England',
                'age' => '26'
            ]);

            \App\Profile::create([
                'nickname' => 'John',
                'user_id' => 6,
                'photo' => 'images/3P8GMIqpxYpOI6WqF86o2FhztyOpQr7SO0OveAjC.jpeg',
                'genre' => 'rock and roll',
                'city' => 'Liverpool, England',
                'age' => '28'
            ]);

            \App\Profile::create([
                'nickname' => 'Adam',
                'user_id' => 7,
                'photo' => 'images/B3PtkJaZWLNfZ37wiAct0VwsM0AimaDoAiuq5g0a.jpeg',
                'genre' => 'rock and roll',
                'city' => 'Lexington, KY',
                'age' => '37'
            ]);
        }
    }
}