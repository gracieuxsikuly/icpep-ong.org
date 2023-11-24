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
            $table->string('designation');
            $table->text('description');
            $table->date('date_debut');
            $table->date('date_fin');
            $table->integer('duree');
            $table->enum('statut', ['En cours', 'Terminé', 'En attente'])->default('En attente');
            $table->decimal('budget', 10, 2);
            $table->string('financement')->nullable();
            $table->string('responsable');
            $table->text('objectifs');
            $table->integer('indicateurs')->default(0);
            $table->text('partenaires')->nullable();
            $table->string('region_geographique')->nullable();
            $table->text('beneficiaires_cibles')->nullable();
            $table->text('activites')->nullable();
            $table->text('evaluations_rapports')->nullable();
            $table->text('documents_associes')->nullable();
            $table->string('image')->nullable();
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
