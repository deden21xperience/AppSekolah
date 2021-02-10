<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('students', function (Blueprint $table) {
      $table->id();
      // $table->bigInteger('biodata_id');
      $table->string('jurusan');
      $table->date('tgl_masuk')->nullable();
      $table->string('nisn')->nullable();
      $table->string('nis')->nullable();
      $table->tinyInteger('status')->default(0); //0 = murid baru, 1 = masih aktif 2 = lulus 3 = keluar 
      $table->string('no_pendaftaran')->nullable();
      $table->string('hobi')->nullable();
      $table->string('cita_cita')->nullable();
      $table->tinyInteger('jumlah_saudara')->nullable();
      $table->tinyInteger('anak_ke')->nullable();
      $table->string('no_kip')->nullable();
      $table->string('nik_ayah')->nullable();
      $table->string('nama_ayah')->nullable();
      $table->string('thn_lahir_ayah')->nullable();
      $table->string('pend_akhir_ayah')->nullable();
      $table->string('pekerjaan_ayah')->nullable();
      $table->string('alamat_ayah')->nullable();
      $table->string('rt_ayah')->nullable();
      $table->string('rw_ayah')->nullable();
      $table->string('desa_ayah')->nullable();
      $table->string('kec_ayah')->nullable();
      $table->string('kab_ayah')->nullable();
      $table->string('prov_ayah')->nullable();
      $table->string('nik_ibu')->nullable();
      $table->string('nama_ibu')->nullable();
      $table->string('thn_lahir_ibu')->nullable();
      $table->string('pend_akhir_ibu')->nullable();
      $table->string('pekerjaan_ibu')->nullable();
      $table->string('alamat_ibu')->nullable();
      $table->string('rt_ibu')->nullable();
      $table->string('rw_ibu')->nullable();
      $table->string('desa_ibu')->nullable();
      $table->string('kec_ibu')->nullable();
      $table->string('kab_ibu')->nullable();
      $table->string('prov_ibu')->nullable();
      $table->string('nik_wali')->nullable();
      $table->string('nama_wali')->nullable();
      $table->string('thn_lahir_wali')->nullable();
      $table->string('pend_akhir_wali')->nullable();
      $table->string('pekerjaan_wali')->nullable();
      $table->string('alamat_wali')->nullable();
      $table->string('rt_wali')->nullable();
      $table->string('rw_wali')->nullable();
      $table->string('desa_wali')->nullable();
      $table->string('kec_wali')->nullable();
      $table->string('kab_wali')->nullable();
      $table->string('prov_wali')->nullable();
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
    Schema::dropIfExists('students');
  }
}
