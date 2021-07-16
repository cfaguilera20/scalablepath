<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FlightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('flight')->insert([
            'name' => Str::random(10),
            'airline' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
        ]);
    }
}
