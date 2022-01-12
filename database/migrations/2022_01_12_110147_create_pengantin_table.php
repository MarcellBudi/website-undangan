<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengantinTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_pengantin', function (Blueprint $table) {
            $table->id();
            $table->string("slug");
            $table->string("title");
            $table->string("pengantin_pria");
            $table->string("pengantin_wanita");
            $table->string("ortu_pengantin_pria");
            $table->string("ortu_pengantin_wanita");
            $table->string("alamat");
            $table->date("tanggal");
            $table->string("gmaps");
            $table->string("vidio");
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
        Schema::dropIfExists('tb_pengantin');
    }
}
