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
        Schema::create('projets', function (Blueprint $table) {
            $table->id();
            $table->string('nom_projet');
            $table->text('description_projet')->nullable();
            $table->date('date_debut')->nullable();
            $table->date('date_fin')->nullable();
            $table->decimal('budget_alloue', 10, 2)->nullable();
            $table->string('financement')->nullable();
            $table->string('responsable_projet')->nullable();
            $table->string('etat_projet')->nullable();
            $table->text('objectifs')->nullable();
            $table->string('localisation')->nullable();
            $table->text('partenaires')->nullable();
            $table->text('indicateurs_performance')->nullable();
            $table->text('rapports_documents')->nullable();
            $table->string('statut_financement')->nullable();
            $table->text('observations')->nullable();
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
        Schema::dropIfExists('projets');
    }
};
