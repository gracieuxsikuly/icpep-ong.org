<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Projet;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class ListeProjet extends Component
{
    public $page_active=20,$desplayedelete,$searchTerm;
    use WithPagination;
    use LivewireAlert;
    protected $listeners = [
        'confirmed'
    ];
    public function render()
    {
         // Fetch projects from the database
         if($this->searchTerm){
            $searchTerm = '%'.$this->searchTerm.'%';
            $projets = Projet::where('designation', 'LIKE', $searchTerm)
            ->orWhere('statut', 'LIKE', $searchTerm)
            ->orWhere('budget', 'LIKE', $searchTerm)
            ->orWhere('financement', 'LIKE', $searchTerm)
            ->orWhere('region_geographique', 'LIKE', $searchTerm)
            ->orWhere('responsable', 'LIKE', $searchTerm)
            ->paginate($this->page_active);
        }else{
            $projets = Projet::paginate($this->page_active);
        }
        return view('livewire.admin.liste-projet',
        ['projets' => $projets]);
    }
    public function delete($id)
    {
        $this->desplayedelete = $id;
        $this->alert('warning', 'Etes vous sur de vouloir suprimer?', [
            'showConfirmButton' => true,
            'confirmButtonText' => 'Suprimer',
            'showCancelButton' => true,
            'cancelButtonText' => 'Cancel',
            'onConfirmed' => 'confirmed',
            'onDismissed' => 'cancelled',
            'position' => 'center'
        ]);
    }
    public function confirmed()
    {

        $methodel = Projet::whereId($this->desplayedelete)->delete();
        if ($methodel) {
            $this->alert('info', 'projet bien Suprime!');
        }
    }

}
