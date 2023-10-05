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

            $table->unsignedBigInteger('id_etudiant')->unsigned();
            $table->foreign('id_etudiant')->references('id')->on('etudiants')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('id_salle')->unsigned();
            $table->foreign('id_salle')->references('id')->on('salles')->onDelete('cascade')->onUpdate('cascade');
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
