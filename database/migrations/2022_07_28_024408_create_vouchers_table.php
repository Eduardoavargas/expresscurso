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
        Schema::create('vouchers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('divulgador_id');
            $table->integer('status')->default(1);
            $table->date('utilizado_at')->nullable();
            $table->foreign('divulgador_id')->references('id')->on('divulgadors')->onDelete('restrict');
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
        if(Schema::hasTable('vouchers')) {
            Schema::drop('vouchers');
        }
    }
};
