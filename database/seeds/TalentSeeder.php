<?php

use Illuminate\Database\Seeder;

class TalentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            \App\Talent::create([
                'profile_id' => 4,
                'instrument_id' => 1,
            ]);

            \App\Talent::create([
                'profile_id' => 4,
                'instrument_id' => 3,
            ]);

            \App\Talent::create([
                'profile_id' => 2,
                'instrument_id' => 4,
            ]);

            \App\Talent::create([
                'profile_id' => 3,
                'instrument_id' => 3,
            ]);

            \App\Talent::create([
                'profile_id' => 5,
                'instrument_id' => 2,
            ]);

            \App\Talent::create([
                'profile_id' => 5,
                'instrument_id' => 3,
            ]);

            \App\Talent::create([
                'profile_id' => 5,
                'instrument_id' => 4,
            ]);

            \App\Talent::create([
                'profile_id' => 6,
                'instrument_id' => 1,
            ]);

            \App\Talent::create([
                'profile_id' => 6,
                'instrument_id' => 3,
            ]);

            \App\Talent::create([
                'profile_id' => 6,
                'instrument_id' => 5,
            ]);

        }
    }
}