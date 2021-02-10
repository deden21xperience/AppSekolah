<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassroomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classrooms', function (Blueprint $table) {
            $table->id();
            $table->string('classroom'); //membuat validasi pada saat input
            $table->tinyInteger('degree'); //tinkat atau kelas berapa
            $table->char('pembagi', 2)->nullable(); //tinkat atau kelas berapa
            $table->string('wali_kelas')->nullable(); // diambil dari guru
            $table->unsignedBigInteger('classroomable_id')->nullable(); //didapat dari table teacher
            $table->string('classroomable_type')->nullable(); //didapat dari table teacher
            $table->timestamps();
            // $table->foreign('teacher_id')->references('id')->on('teachers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('classrooms');
    }
}
