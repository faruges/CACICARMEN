<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TablaCaciSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('caci')->insert([
            'caci' => 'Luz Maria Gomez Pezuela',
            'curp_caci' => 'Curp 1',
            'created_at' => now()
        ]);
        DB::table('caci')->insert([
            'caci' => 'Mtra Eva Moreno Sanchez',
            'curp_caci' => 'Curp 2',
            'created_at' => now()
        ]);
        DB::table('caci')->insert([
            'caci' => 'Bertha Von Glumer Leyva',
            'curp_caci' => 'Curp 3',
            'created_at' => now()
        ]);
        DB::table('caci')->insert([
            'caci' => 'Garolina Agazzi',
            'curp_caci' => 'Curp 4',
            'created_at' => now()
        ]);
        DB::table('caci')->insert([
            'caci' => 'Carmen S',
            'curp_caci' => 'Curp 5',
            'created_at' => now()
        ]);
    }
}
