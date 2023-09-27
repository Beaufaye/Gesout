<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('soutenances', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->unsignedBigInteger('juries_id')->unsigned();
            $table->foreign('juries_id')->references('id')->on('juries')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('salles_id')->unsigned();
            $table->foreign('salles_id')->references('id')->on('salles')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('demandes_id')->unsigned();
            $table->foreign('demandes_id')->references('id')->on('demandes')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('users_id')->unsigned();
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('soutenances');
    }
};
