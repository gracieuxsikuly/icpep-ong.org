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
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
         'videolink' => 'file|mimes:mp4,avi|max:20000', // max:20000 = 20 MB
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
         'videolink.file' => 'Le champ Vidéo doit être un fichier.',
         'videolink.mimes' => 'Le champ Vidéo doit être un fichier de type mp4, avi',
         'videolink.max' => 'Le champ Vidéo ne doit pas dépasser :max kilo-octets.',
    ];
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function saveblog()
    {
        $this->validate();
        if ($this->image) {
            $imageName = $this->image->getClientOriginalName();
                $imageName = time() . $imageName;
                $imageResized = Image::make($this->image->getRealPath())
                ->save(public_path('assets/images/blog/' . $imageName));
        }

        if($this->videolink)
        {
            $video = $this->videolink;
            $videoName = time() . '_' . $video->getClientOriginalName();
           // Stocker le fichier vidéo dans le dossier 'videos' du dossier public avec le nom généré
             $path = $video->store('public');
        }
         dd($path);


        $blog = new Blog();
        $blog->titre = $this->titre;
        $blog->contenu = $this->contenu;
        $blog->auteur_id = auth()->user()->id;
        $blog->slug = substr(Str::slug($this->titre), 0, 49);
        $blog->notation = 0;
        $blog->image = $this->image ? $imageName : null;
        $blog->vue = 0;
        $blog->videolink = $path ? $videoName : null;
        $blog->save();
        $this->alert('success', 'blog bien creer!');
        $this->reset();
         return redirect()->route('/admin/listpublication');
    }
    public function render()
    {
        return view('livewire.admin.add-blog');
    }
}
