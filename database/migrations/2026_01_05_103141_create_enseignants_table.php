<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('enseignants', function (Blueprint $table) {
            $table->id();
            $table->string('matricule')->unique();
            $table->string('nom');
            $table->string('prenom');
            $table->string('telephone');
            $table->enum('statut', ['0', '1']);
           // 0: vacataire ; 1:permanent
            $table->decimal('cout_heure', 10, 2)->nullable();
            $table->integer('heures_prevues_semaine')->nullable();

            $table->decimal('salaire_base', 10, 2)->nullable();

            $table->string('numero_compte')->nullable();
            $table->string('nom_banque')->nullable();

            $table->boolean('actif')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enseignants');
    }
};
