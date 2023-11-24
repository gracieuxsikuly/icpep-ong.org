<?php

namespace App\Http\Livewire\Front\Partial;

use Livewire\Component;
use App\Models\Projet;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;
class ProjetLivewire extends Component
{
    public $page_active=3;
    use WithPagination;
    use LivewireAlert;
    public function render()
    {
        // chargement de 3 derniers projet
        $projets = Projet::orderBy('id', 'desc')->take(3)->get();
        return view('livewire.front.partial.projet-livewire',
        ['projets' => $projets]);
    }
}
