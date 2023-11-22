<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    use HasFactory;
    protected $fillable = [
        'id','designation', 'description', 'date_debut', 'date_fin', 'duree', 'statut',
        'budget', 'financement', 'responsable', 'objectifs', 'indicateurs',
        'partenaires', 'region_geographique', 'beneficiaires_cibles',
        'activites', 'evaluations_rapports', 'documents_associes','image',
    ];



}
