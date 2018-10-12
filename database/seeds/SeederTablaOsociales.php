<?php

use Illuminate\Database\Seeder;

class SeederTablaOsociales extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $obrasociales  = [['nombre' => 'BIENESTAR SALUD'],
        ['nombre' => 'GALENO'],
        ['nombre' => 'IPS'],
        ['nombre' => 'MEDICUS'],
        ['nombre' => 'OSDE'],
        ['nombre' => 'OSUNSA'],
        ];
        DB::table('osocials')->insert($obrasociales);
    }
}
