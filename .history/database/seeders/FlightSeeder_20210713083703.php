<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class FlightSeeder extends Seeder
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
            DB::table('flight')->insert([
                'name' => 'flight-'.Str::random(10),
                'airline' => 'airline-'.Str::random(10),
            ]);
            $i++;
        }
    }
}
