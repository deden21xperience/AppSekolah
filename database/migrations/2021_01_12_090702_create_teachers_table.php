<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            // $table->bigInteger('biodata_id');
            $table->string('gelar_akademik_depan')->nullable(); // diambil dari database indoenesia
            $table->string('gelar_akademik_belakang')->nullable(); // diambil dari database indoenesia
            $table->string('gelar_kehormatan')->nullable(); // diambil dari database indoenesia
            $table->string('nuptk')->nullable();
            $table->boolean('kelas_mengajar')->default(false);
            $table->bigInteger('subject'); //Mata Pelajaran
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
        Schema::dropIfExists('teachers');
    }
}
