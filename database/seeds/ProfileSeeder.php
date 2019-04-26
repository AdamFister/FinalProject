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
                'nickname' => 'Ringo',
                'user_id' => 2,
                'photo' => 'images/4yVsZTaeEtm3rIMw02mTfjG1W9GGUbR2kPyF1Yzv.jpeg'
            ]);

            \App\Profile::create([
                'nickname' => 'Harry',
                'user_id' => 3,
                'photo' => 'images/7ICkofg5nJoeNwlbD1jUMICfOduGo73yqeKoSwUS.jpeg'
            ]);

            \App\Profile::create([
                'nickname' => 'George',
                'user_id' => 4,
                'photo' => 'images/1mlHO8DxsXDoFTfQgc7E4eYUVJwEB41pUJGwMVo1.jpeg'
            ]);

            \App\Profile::create([
                'nickname' => 'Paul',
                'user_id' => 5,
                'photo' => 'images/WxnmKs99nz0LQPsKFlTyq2ywcPpmmbDAn6gKlCdL.jpeg'
            ]);

            \App\Profile::create([
                'nickname' => 'John',
                'user_id' => 6,
                'photo' => 'images/3P8GMIqpxYpOI6WqF86o2FhztyOpQr7SO0OveAjC.jpeg'
            ]);
        }
    }
}