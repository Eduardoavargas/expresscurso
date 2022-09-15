<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('locals', function (Blueprint $table) {
            $table->id('id');
            $table->string('cidade');
            $table->string('local');
            $table->string('endereco');
            $table->string('telefone');
            $table->string('valor')->nullable();
            $table->string('data_atendimento')->nullable();
            $table->string('divulgador')->nullable();
            $table->string('projeto')->nullable();
            $table->string('observacao')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return  void
     */
    public function down()
    {
        Schema::drop('locals');
    }
};
