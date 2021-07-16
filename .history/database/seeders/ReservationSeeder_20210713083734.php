<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $i = 0;

        while ($i < 2) {
            DB::table('reservation')->insert([
                'flight_id' => 'flight-'.Str::random(10),
                'airline' => 'airline-'.Str::random(10),
            ]);
            $i++;
        }
    }
}
