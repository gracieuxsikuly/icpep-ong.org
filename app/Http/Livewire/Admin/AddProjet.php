<?php

namespace App\Http\Livewire\Admin;

use App\Models\Projet;
use Livewire\Component;
use Livewire\WithFileUploads;
use Intervention\Image\Facades\Image;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class AddProjet extends Component
{
    use WithFileUploads;
    use LivewireAlert;

    public $designation;
    public $date_debut;
    public $duree;
    public $budget;
    public $responsable;
    public $partenaires;
    public $region_geographique;
    public $beneficiaires_cibles;
    public $description;
    public $date_fin;
    // public $statut;
    public $financement;
    public $objectifs;
    public $image;
    protected $rules = [
        'designation' => 'required|string',
        'date_debut' => 'required|date',
        'duree' => 'required|string',
        'budget' => 'required|string',
        'responsable' => 'required|string',
        'partenaires' => 'required|string',
        'region_geographique' => 'required|string',
        'beneficiaires_cibles' => 'required|string',
        'description' => 'required|string',
        'date_fin' => 'required|date',
        // 'statut' => 'required|string',
        'financement' => 'required|string',
        'objectifs' => 'required|string',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ];
    // app/Http/Livewire/ProjetForm.php

protected $messages = [
    'designation.required' => 'Le champ Désignation est obligatoire.',
    'designation.string' => 'Le champ Désignation doit être une chaîne de caractères.',

    'date_debut.required' => 'Le champ Date de début est obligatoire.',
    'date_debut.date' => 'Le champ Date de début doit être une date valide.',

    'duree.required' => 'Le champ Durée est obligatoire.',
    'duree.string' => 'Le champ Durée doit être une chaîne de caractères.',

    'budget.required' => 'Le champ Budget est obligatoire.',
    'budget.string' => 'Le champ Budget doit être une chaîne de caractères.',

    'responsable.required' => 'Le champ Responsable est obligatoire.',
    'responsable.string' => 'Le champ Responsable doit être une chaîne de caractères.',

    'partenaires.required' => 'Le champ Partenaires est obligatoire.',
    'partenaires.string' => 'Le champ Partenaires doit être une chaîne de caractères.',

    'region_geographique.required' => 'Le champ Région géographique est obligatoire.',
    'region_geographique.string' => 'Le champ Région géographique doit être une chaîne de caractères.',

    'beneficiaires_cibles.required' => 'Le champ Bénéficiaires Cibles est obligatoire.',
    'beneficiaires_cibles.string' => 'Le champ Bénéficiaires Cibles doit être une chaîne de caractères.',

    'description.required' => 'Le champ Description est obligatoire.',
    'description.string' => 'Le champ Description doit être une chaîne de caractères.',

    'date_fin.required' => 'Le champ Date de fin est obligatoire.',
    'date_fin.date' => 'Le champ Date de fin doit être une date valide.',

    // 'statut.required' => 'Le champ Statut est obligatoire.',
    // 'statut.string' => 'Le champ Statut doit être une chaîne de caractères.',

    'financement.required' => 'Le champ Financement est obligatoire.',
    'financement.string' => 'Le champ Financement doit être une chaîne de caractères.',

    'objectifs.required' => 'Le champ Objectifs est obligatoire.',
    'objectifs.string' => 'Le champ Objectifs doit être une chaîne de caractères.',


    'image.required' => 'Le champ Image est obligatoire.',
    'image.image' => 'Le champ Image doit être une image.',
    'image.mimes' => 'Le champ Image doit être une image de type jpeg, png, jpg ou gif.',
    'image.max' => 'Le champ Image ne doit pas dépasser :max kilo-octets.',
];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function saveprojet()
    {

        $this->validate();
        // dd("ok");
        if ($this->image) {
            $imageName = $this->image->getClientOriginalName();
                $imageName = time() . $imageName;
                $imageResized = Image::make($this->image->getRealPath())
                ->save(public_path('assets/images/projet/' . $imageName));
        }

        $projet = new Projet();
        $projet->designation = $this->designation;
        $projet->date_debut = $this->date_debut;
        $projet->duree = $this->duree;
        $projet->budget = $this->budget;
        $projet->responsable = $this->responsable;
        $projet->partenaires = $this->partenaires;
        $projet->region_geographique = $this->region_geographique;
        $projet->beneficiaires_cibles = $this->beneficiaires_cibles;
        $projet->description = $this->description;
        $projet->date_fin = $this->date_fin;
        $projet->financement = $this->financement;
        $projet->objectifs = $this->objectifs;
        // condition ternaire sur l'image
        $projet->image = $this->image ? $imageName : null;
        $projet->save();
        $this->alert('success', 'projet bien creer!');
        // session()->flash('message', 'Projet successfully added.');
         return redirect()->to('/admin/listprojet');
    }
    public function render()
    {
        return view('livewire.admin.add-projet');
    }
}
