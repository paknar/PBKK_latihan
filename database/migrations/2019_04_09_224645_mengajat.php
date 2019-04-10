<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Mengajat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mengajar', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nipdosen');
            $table->string('matakuliah_id');

        });
    }

    /**
     * Reverse the migrations.
    *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mengajar');
    }
}
