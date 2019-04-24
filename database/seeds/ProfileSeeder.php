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
                'user_id' => '1'
            ]);
        }
    }
}