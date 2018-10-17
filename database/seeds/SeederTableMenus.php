<?php

use App\Menu;
use Illuminate\Database\Seeder;

class SeederTableMenus extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $m1 = factory(Menu::class)->create([
            'etiqueta'=>'Servicios',
            'pagina'=>'servicios',
            'padre'=>0,
            'orden'=>0,
        ]);
        factory(Menu::class)->create([
            'etiqueta'=>'Planes',
            'pagina'=>'planes',
            'padre'=>$m1->id,
            'orden'=>0,
        ]);
        factory(Menu::class)->create([
            'etiqueta'=>'Tratamientos',
            'pagina'=>'tratamientos',
            'padre'=>$m1->id,
            'orden'=>1,
        ]);
        factory(Menu::class)->create([
            'etiqueta'=>'Urgencias',
            'pagina'=>'urgencias',
            'padre'=>$m1->id,
            'orden'=>2,
        ]);
        factory(Menu::class)->create([
            'etiqueta'=>'Turnos',
            'pagina'=>'turnos',
            'padre'=>$m1->id,
            'orden'=>3,
        ]);

        //----------------------------//
        factory(Menu::class)->create([
            'etiqueta'=>'Obras Sociales',
            'pagina'=>'osociales',
            'padre'=>0,
            'orden'=>1,
        ]);

        //------------------------------------//
        factory(Menu::class)->create([
            'etiqueta'=>'Paciente',
            'pagina'=>'pacientes',
            'padre'=>0,
            'orden'=>2,
        ]);
        
        //------------------------------------//
        factory(Menu::class)->create([
            'etiqueta'=>'Contacto',
            'pagina'=>'contacto',
            'padre'=>0,
            'orden'=>3,
        ]);

        //------------------------------------//
        factory(Menu::class)->create([
            'etiqueta'=>'Calendario',
            'pagina'=>'tasks',
            'padre'=>0,
            'orden'=>4
        ]);

        //------------------------------------//
        $m5 = factory(Menu::class)->create([
            'etiqueta'=>'La Clinica',
            'pagina'=>'la_clinica',
            'padre'=>0,
            'orden'=>5,
        ]);
        factory(Menu::class)->create([
            'etiqueta'=>'Acerca de nosotros',
            'pagina'=>'about',
            'padre'=>$m5->id,
            'orden'=>0,
        ]);
        factory(Menu::class)->create([
            'etiqueta'=>'Ubicacion',
            'pagina'=>'ubicacion',
            'padre'=>$m5->id,
            'orden'=>1,
        ]);
    }
}
