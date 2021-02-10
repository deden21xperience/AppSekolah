<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTataUsahasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tata_usahas', function (Blueprint $table) {
            $table->id();
            $table->string('gelar_akademik_depan')->nullable(); // diambil dari database indoenesia
            $table->string('gelar_akademik_belakang')->nullable(); // diambil dari database indoenesia
            $table->string('gelar_kehormatan')->nullable(); // diambil dari database indoenesia
            $table->string('nuptk')->nullable();
            $table->bigInteger('jabatan')->nullable(); //diambil dari database indonesia
            $table->date('tgl_masuk');
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
        Schema::dropIfExists('tata_usahas');
    }
}
