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
        $i = 1;

        while ($i <= 5) {
            DB::table('reservations')->insert([
                'flight_id' => $id,
            ]);
            $i++;
        }
    }
}
