<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;
use App\Models\Blog;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;
class DetailsEvenemt extends Component
{
    public $slug;
    public $page_active=6;
    use WithPagination;
    use LivewireAlert;
    public $titre, $contenu, $image, $date,$autor,$vue,$notation;
    protected $lastblogs;
    public $seachItem;
    public $videolink;
    public function render()
    {
        if($this->seachItem){
            $this->lastblogs = Blog::where('titre', 'like', '%'.$this->seachItem.'%')->paginate($this->page_active);
        }else{
        $this->lastblogs = Blog::orderBy('id', 'desc')->take(3)->inRandomOrder()->get();
        }
         return view('livewire.front.details-evenemt');
    }
    public function mount($slug)
    {
        $this->slug = $slug;
        $blogs = Blog::where('slug', $this->slug)->first();
        $this->titre = $blogs->titre;
        $this->contenu = $blogs->contenu;
        $this->image = $blogs->image;
        $this->date = $blogs->created_at;
        // $this->autor = $blogs->autor;
        $this->vue= $blogs->vue;
        $this->notation = $blogs->notation;
        $this->videolink = $blogs->videolink;
        if ($blogs) {
            // Incrémente le nombre de vues
            $blogs->increment('vue');
        }
    }

}
