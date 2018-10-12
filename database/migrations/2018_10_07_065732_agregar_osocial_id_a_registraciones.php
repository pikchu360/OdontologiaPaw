<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AgregarOsocialIdARegistraciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('registraciones', function (Blueprint $table) {
            $table->integer('osocial_id')->unsigned();
            $table->foreign('osocial_id')->references('id')->on('osociales');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('registraciones', function (Blueprint $table) {
            $table->dropForeign('registraciones_osocial_id_foreign');
            $table->dropColumn('osocial_id');
        });
    }
}
