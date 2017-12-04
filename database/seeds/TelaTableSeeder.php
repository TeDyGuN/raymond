<?php

use Illuminate\Database\Seeder;

class TelaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('telas')->insert(array(
            array('nombre' => 'Obreron'),
            array('nombre' => 'Zenda'),
            array('nombre' => 'Hilmes'),
            array('nombre' => 'Pesaro'),
        ));
    }
}
