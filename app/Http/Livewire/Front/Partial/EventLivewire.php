<?php

namespace App\Http\Livewire\Front\Partial;

use Livewire\Component;
use App\Models\Blog;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class EventLivewire extends Component
{
    public $page_active=3;
    use WithPagination;
    use LivewireAlert;
    public function render()
    {
         // chargement de 3 derniers projet
         $blogs = Blog::orderBy('id', 'desc')->take(3)->get();
         return view('livewire.front.partial.event-livewire',
         ['blogs' => $blogs]);
    }

}
