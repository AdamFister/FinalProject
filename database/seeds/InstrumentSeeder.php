<?php

use Illuminate\Database\Seeder;

class InstrumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            \App\Instrument::create([
                'type' => 'guitar',
            ]);

            \App\Instrument::create([
                'type' => 'bass',
            ]);

            \App\Instrument::create([
                'type' => 'vocals',
            ]);

            \App\Instrument::create([
                'type' => 'drums',
            ]);

            \App\Instrument::create([
                'type' => 'keys',
            ]);
        }
    }
}
