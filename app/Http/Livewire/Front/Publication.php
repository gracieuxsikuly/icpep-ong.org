<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;
use App\Models\Blog;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;
class Publication extends Component
{
    public $page_active=6;
    use WithPagination;
    use LivewireAlert;
    public function render()
    {
        $blogs = Blog::where('publie',1)->
        orderBy('id', 'desc')->paginate($this->page_active);
        return view('livewire.front.publication',
        ['blogs' => $blogs]);

    }
}
