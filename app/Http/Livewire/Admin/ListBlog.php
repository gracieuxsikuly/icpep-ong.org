<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Blog;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class ListBlog extends Component
{
    public $page_active=20,$desplayedelete,$searchTerm;
    use WithPagination;
    use LivewireAlert;
    protected $listeners = [
        'confirmed'
    ];
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

        $methodel = Blog::whereId($this->desplayedelete)->delete();
        if ($methodel) {
            $this->alert('info', 'projet bien Suprime!');
        }
    }
    public function render()
    {
        if ($this->searchTerm) {
            $searchTerm = '%' . $this->searchTerm . '%';

            $blogs = Blog::where('titre', 'LIKE', $searchTerm)
                ->orWhere('contenu', 'LIKE', $searchTerm)
                ->orWhere('publie', 'LIKE', $searchTerm)
                ->orWhere('notation', 'LIKE', $searchTerm)
                ->orWhere('image', 'LIKE', $searchTerm)
                ->orWhere('vue', 'LIKE', $searchTerm)
                ->paginate($this->page_active);
        } else {
            $blogs = Blog::paginate($this->page_active);
        }

        return view('livewire.admin.list-blog', ['blogs' => $blogs]);
    }
}
