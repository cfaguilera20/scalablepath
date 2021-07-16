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

        while ($i < 5) {
            DB::table('reservation')->insert([
                'name' => 'flight-'.Str::random(10),
                'airline' => 'airline-'.Str::random(10),
            ]);
            $i++;
        }
    }
}
