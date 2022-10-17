<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('esquadra', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('distrito_id')->nullable();
            $table->foreign('distrito_id')->references('id')->on('distrito')->onDelete('cascade')->onUpdate('cascade');
            $table->string('nome')->unique();
            $table->string('endereco')->nullable();
            $table->string('contacto')->nullable();
            $table->string('estado')->default('on');
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
        Schema::dropIfExists('esquadra');
    }
};
