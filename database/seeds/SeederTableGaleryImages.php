<?php

use Illuminate\Database\Seeder;

class SeederTableGaleryImages extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('galeryImages')->insert([
            'url'=>'/images/mySlider/od1.jpg',
            'title'=>'Odontologia PAW',
            'description'=>'Limpieza',
            'priority'=>'1',
        ]);
        DB::table('galeryImages')->insert([
            'url'=>'/images/mySlider/od2.jpg',
            'title'=>'OPAW',
            'description'=>'Colocacion de aparatos dentales',
            'priority'=>'1',
        ]);
        DB::table('galeryImages')->insert([
            'url'=>'/images/mySlider/od3.jpg',
            'title'=>'OPAW Develop',
            'description'=>'Dentadura Postiza',
            'priority'=>'2',
        ]);
        DB::table('galeryImages')->insert([
            'url'=>'/images/mySlider/od4.jpeg',
            'title'=>'OPAW WEB',
            'description'=>'Diente por Diente',
            'priority'=>'3',
        ]);
        DB::table('galeryImages')->insert([
            'url'=>'/images/mySlider/od5.jpeg',
            'title'=>'OPAW White',
            'description'=>'Visitanos',
            'priority'=>'3',
        ]);
    }
}
