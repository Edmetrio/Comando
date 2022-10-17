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
        Schema::create('descricao', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('indiciado_id')->nullable();
            $table->foreign('indiciado_id')->references('id')->on('indiciado')->onDelete('cascade')->onUpdate('cascade');
            $table->uuid('crime_id')->nullable();
            $table->foreign('crime_id')->references('id')->on('crimes')->onDelete('cascade')->onUpdate('cascade');
            $table->longText('nome')->nullable();
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
        Schema::dropIfExists('descricao');
    }
};
