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
        Schema::create('stagiaires', function (Blueprint $table) {
            $table->id();
            $table->string("nom_complet", 300);
            $table->enum("genre", ["M", "F"])->default("M");
            $table->date("date_naissance")->nullable();
            $table->decimal("note", 4, 2);
            $table->foreignId('groupe_id')->constrained();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stagiaires');
    }
};
