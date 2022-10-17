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
        Schema::create('informacao', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('indiciado_id')->nullable();
            $table->foreign('indiciado_id')->references('id')->on('indiciado')->onDelete('cascade')->onUpdate('cascade');
            $table->string('nome')->nullable();
            $table->string('icon')->nullable();
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
        Schema::dropIfExists('informacao');
    }
};
