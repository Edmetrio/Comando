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
        Schema::create('indiciado', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('users_id')->nullable();
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->uuid('esquadra_id')->nullable();
            $table->foreign('esquadra_id')->references('id')->on('esquadra')->onDelete('cascade')->onUpdate('cascade');
            $table->string('nome')->nullable();
            $table->string('endereco')->nullable();
            $table->string('foto')->nullable();
            $table->string('fingerprint')->nullable();
            $table->string('assinatura')->nullable();
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
        Schema::dropIfExists('indiciado');
    }
};
