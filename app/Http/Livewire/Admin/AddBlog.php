<?php

namespace App\Http\Livewire\Admin;

use App\Models\Blog;
use Livewire\Component;
use Livewire\WithFileUploads;
use Intervention\Image\Facades\Image;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Illuminate\Support\Str;

class AddBlog extends Component
{
    use WithFileUploads;
    use LivewireAlert;
    public $titre;
    public $blog;
    public $contenu;
    // public $auteur_id;
    // public $slug;
    public $publie;
    // public $notation;
    public $image;
    public $videolink;
    // public $vue;
    protected $rules = [
        'titre' => 'required|string',
        'contenu' => 'required|string',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:4096',
        // 'videolink' => 'url',
    ];
    protected $messages = [
        'titre.required' => 'Le champ Titre est obligatoire.',
        'titre.string' => 'Le champ Titre doit être une chaîne de caractères.',

        'contenu.required' => 'Le champ Contenu est obligatoire.',
        'contenu.string' => 'Le champ Contenu doit être une chaîne de caractères.',

        'image.required' => 'Le champ Image est obligatoire.',
        'image.image' => 'Le champ Image doit être une image.',
        'image.mimes' => 'Le champ Image doit être une image de type jpeg, png, jpg ou gif.',
        'image.max' => 'Le champ Image ne doit pas dépasser :max kilo-octets.',
        // 'videolink.url' => 'Le champ Vidéo doit être une URL valide.',
        //  'videolink.file' => 'Le champ Vidéo doit être un fichier.',
        //  'videolink.mimes' => 'Le champ Vidéo doit être un fichier de type mp4, avi',
        //  'videolink.max' => 'Le champ Vidéo ne doit pas dépasser :max kilo-octets.',
    ];
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function saveblog()
    {
        if($this->blog!='0'){
            $blog = Blog::find($this->blog);
            if ($this->image) {
                ini_set('memory_limit', '256M');
                $imageName = $this->image->getClientOriginalName();
                    $imageName = time() . $imageName;
                    $imageResized = Image::make($this->image->getRealPath())
                    ->save(public_path('assets/images/blog/' . $imageName));
            }
            $blog->titre = $this->titre;
                $blog->contenu = $this->contenu;
                $blog->auteur_id = auth()->user()->id;
                $blog->slug = substr(Str::slug($this->titre), 0, 49);
                $blog->notation = 0;
                $blog->image = $this->image ? $imageName : $this->oldphoto;
                $blog->vue = 0;
                $blog->publie = 1;
                $blog->videolink =$this->videolink ? $this->videolink : null;
                $blog->save();
                $this->alert('success', 'Blog modifié avec succès!',[
                    'position' => 'center',
                ]);
                return $this->redirect('/admin/listpublication');
        }else{
        $this->validate();
        if ($this->image) {
            ini_set('memory_limit', '256M');
            $imageName = $this->image->getClientOriginalName();
                $imageName = time() . $imageName;
                $imageResized = Image::make($this->image->getRealPath())
                ->save(public_path('assets/images/blog/' . $imageName));
                if($this->oldphoto){
                $this->cleanupOldLogo();
                }
        }
        $blog = new Blog();
        $blog->titre = $this->titre;
        $blog->contenu = $this->contenu;
        $blog->auteur_id = auth()->user()->id;
        $blog->slug = substr(Str::slug($this->titre), 0, 49);
        $blog->notation = 0;
        $blog->image = $this->image ? $imageName : null;
        $blog->vue = 0;
        $blog->publie = 1;
        $blog->videolink =$this->videolink ? $this->videolink : null;
        $blog->save();
        $this->alert('success', 'Blog enregistré avec succès!',[
            'position' => 'center',
        ]);
        return $this->redirect('/admin/listpublication');
    }
    }
    public function cleanupOldLogo()
    {
        if ($this->oldphoto != null) {
            $path = public_path("assets/images/blog/".$this->oldphoto);
            if (file_exists($path)) {
                unlink($path);
            }
        }
    }
    public function render()
    {
        return view('livewire.admin.add-blog');
    }
    public $oldphoto;
    public function mount(){
        if($this->blog!='0'){
            $blog = Blog::find($this->blog);
            $this->titre = $blog->titre;
            $this->contenu = $blog->contenu;
            $this->oldphoto = $blog->image;
            $this->videolink = $blog->videolink;
        }
    }
}
