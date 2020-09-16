<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CiudadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ciudads')->insert(['nombre' => 'Bogotá']);
        DB::table('ciudads')->insert(['nombre' => 'Chía']);
        DB::table('ciudads')->insert(['nombre' => 'Soacha']);
        DB::table('ciudads')->insert(['nombre' => 'Mosquera']);
        DB::table('ciudads')->insert(['nombre' => 'Suezca']);
        DB::table('ciudads')->insert(['nombre' => 'Sesquilé']);
        DB::table('ciudads')->insert(['nombre' => 'Medellín']);
        DB::table('ciudads')->insert(['nombre' => 'Cali']);
    }
}
