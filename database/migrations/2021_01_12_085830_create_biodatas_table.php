<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiodatasTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('biodatas', function (Blueprint $table) {
			$table->id();
			$table->string('nama');
			$table->string('tpt_lahir');
			$table->string('jk');
			$table->date('tgl_lahir');
			$table->string('alamat'); //diisi kampung/dusun, rt, rw
			$table->string('rt'); //diisi kampung/dusun, rt, rw
			$table->string('rw'); //diisi kampung/dusun, rt, rw
			$table->string('prov'); //dari database indonesia
			$table->string('kab'); //dari database indonesia
			$table->string('kec'); //dari database indonesia
			$table->string('desa'); //dari database indonesia
			$table->string('kodepos')->nullable(); //dari database indonesia
			$table->string('nik')->nullable();
			$table->string('agama'); //dari databsase indonesia
			$table->string('pekerjaan')->nullable(); //dari database indonesia
			$table->string('sekolah')->nullable(); //diisi sekolah terakhir diambil dari database indonesia
			$table->string('foto')->default('noimage.jpg');  //default gambar untuk laki2 dan perempuan
			$table->unsignedBigInteger('biodataable_id')->nullable();
			$table->string('biodataable_type')->nullable();
			$table->boolean('warga_sekolah')->default(false);
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
		Schema::dropIfExists('biodatas');
	}
}
