<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatPersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dat_pers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->integer('cedula')->nullable();
            $table->date('fech_nac')->nullable();
            $table->string('sexo')->nullable();
            $table->string('est_civil')->nullable();
            $table->integer('num_movil')->nullable();
            $table->integer('num_fijo')->nullable();
            $table->string('correo_pers')->nullable();
            $table->string('perf_img')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dat_pers');
    }
}
