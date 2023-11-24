<?php

namespace App\Http\Livewire\Front;
use App\Models\Projet;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;

use Livewire\Component;

class Service extends Component
{
    public $page_active=3;
    use WithPagination;
    use LivewireAlert;
    public function render()
    {
        $projets = Projet::orderBy('id', 'desc')->paginate($this->page_active);
        return view('livewire.front.service',
        ['projets' => $projets]);
    }
}
