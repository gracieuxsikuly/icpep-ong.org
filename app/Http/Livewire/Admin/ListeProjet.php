<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Projet;

class ListeProjet extends Component
{
    public $projets;
    public function render()
    {
         // Fetch projects from the database
         $this->projets = Projet::all();
        return view('livewire.admin.liste-projet');
    }
}
