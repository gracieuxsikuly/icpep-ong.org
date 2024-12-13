<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Blog;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Illuminate\Database\Eloquent\Model;

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
    public $oldphoto;

    public function confirmed()
    {
        $methodel = Blog::find($this->desplayedelete);
        $this->oldphoto = $methodel->image;
         $methodel->delete();
        $this->cleanupOldLogo();
        $this->alert('success', 'projet bien Suprime', [
            'position' => 'center',
            'timer' => 3000,
            'toast' => false,
        ]);
    }
    //unlink or delete file
    public function cleanupOldLogo()
    {
        if ($this->oldphoto != null) {
            $path = public_path("assets/images/blog/".$this->oldphoto);
            if (file_exists($path)) {
                unlink($path);
            }
        }
    }
    // supression de la photo si ca exist


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
                ->orderBy('id', 'DESC')
                ->paginate($this->page_active);
        } else {
            $blogs = Blog::orderby('id','DESC')->paginate($this->page_active);
        }

        return view('livewire.admin.list-blog', ['blogs' => $blogs]);
    }

    public function isActive($id){
        $blog = Blog::find($id);
        $blog->publie = !$blog->publie;
        $blog->save();
    }

}
