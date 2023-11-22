<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AddProjet extends Component
{
    public $designation;
    public $date_debut;
    public $duree;
    public $budget;
    public $responsable;
    public $partenaires;
    public $region_geographique;
    public $beneficiaires_cibles;
    public $description;
    public $date_fin;
    public $statut;
    public $financement;
    public $objectifs;
    public $image;
    protected $rules = [
        'designation' => 'required|string',
        'date_debut' => 'required|date',
        'duree' => 'required|string',
        'budget' => 'required|string',
        'responsable' => 'required|string',
        'partenaires' => 'required|string',
        'region_geographique' => 'required|string',
        'beneficiaires_cibles' => 'required|string',
        'description' => 'required|string',
        'date_fin' => 'required|date',
        'statut' => 'required|string',
        'financement' => 'required|string',
        'objectifs' => 'required|string',
        'indicateurs' => 'required|string',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ];
    public function render()
    {
        return view('livewire.admin.add-projet');
    }
}
