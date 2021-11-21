<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeleksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seleksi', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('id_users')->constrained('users')
            //         ->onUpdate('cascade')
            //         ->onDelete('cascade');

            $table->integer('id_users')->nullable($value=false);
            $table->foreign('id_users')->references('id')->on('daftar')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->foreignId('id_seleksi')->constrained('jenisseleksi')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->float('nilai');
            $table->string('keterangan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seleksi');
    }
}
