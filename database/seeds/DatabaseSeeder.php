<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(SeederTablaUsers::class);
        $this->call(SeederTableMenus::class);
        $this->call(SeederTableGaleryImages::class);
        $this->call(SeederTablaOsociales::class);
    }
}
