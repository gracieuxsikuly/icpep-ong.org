<?php

namespace App\Http\Livewire\Front\Partial;

use Livewire\Component;
use App\Models\Projet;
class LatestProjectLivewire extends Component
{
    public function render()
    {
        $projets = Projet::orderBy('id', 'desc')->take(6)->get();
        return view('livewire.front.partial.latest-project-livewire',
        ['projets' => $projets]);
    }
}
