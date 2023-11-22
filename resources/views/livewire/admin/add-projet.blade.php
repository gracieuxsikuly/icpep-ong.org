<div>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title mb-4">Ajouter Projet</h4>

            <form wire:submit.prevent='saveprojet'>

                <div class="row">
                    <!-- Colonne de gauche -->
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="designation" class="form-label">Désignation</label>
                            <input type="text" class="form-control" id="designation" wire:model="designation">
                            @error('designation')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>

                        <div class="mb-3">
                            <label for="date_debut" class="form-label">Date de début</label>
                            <input type="date" class="form-control" id="date_debut" wire:model="date_debut">
                            @error('date_debut')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>

                        <div class="mb-3">
                            <label for="duree" class="form-label">Durée</label>
                            <input type="text" class="form-control" id="duree" wire:model="duree">
                            @error('duree')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>

                        <div class="mb-3">
                            <label for="budget" class="form-label">Budget</label>
                            <input type="text" class="form-control" id="budget" wire:model="budget">
                            @error('budget')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>

                        <div class="mb-3">
                            <label for="responsable" class="form-label">Responsable</label>
                            <input type="text" class="form-control" id="responsable" wire:model="responsable">
                            @error('responsable')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>

                        <div class="mb-3">
                            <label for="partenaires" class="form-label">Partenaires</label>
                            <input type="text" class="form-control" id="partenaires" wire:model="partenaires">
                            @error('partenaires')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>

                        <div class="mb-3">
                            <label for="region_geographique" class="form-label">Région géographique</label>
                            <input type="text" class="form-control" id="region_geographique" wire:model="region_geographique">
                            @error('region_geographique')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>


                    </div>

                    <!-- Colonne de droite -->
                    <div class="col-md-6">

                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" wire:model="description" rows="3"></textarea>
                            @error('description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>

                        <div class="mb-3">
                            <label for="date_fin" class="form-label">Date de fin</label>
                            <input type="date" class="form-control" id="date_fin" wire:model="date_fin">
                            @error('date_fin')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>

                        {{-- <div class="mb-3">
                            <label for="statut" class="form-label">Statut</label>
                            <input type="text" class="form-control" id="statut" wire:model="statut">
                        </div> --}}

                        <div class="mb-3">
                            <label for="financement" class="form-label">Financement</label>
                            <input type="text" class="form-control" id="financement" wire:model="financement">
                            @error('financement')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>

                        <div class="mb-3">
                            <label for="objectifs" class="form-label">Objectifs</label>
                            <input type="text" class="form-control" id="objectifs" wire:model="objectifs">
                            @error('objectifs')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                        <div class="mb-3">
                            <label for="beneficiaires_cibles" class="form-label">Bénéficiaires Cibles</label>
                            <input type="text" class="form-control" id="beneficiaires_cibles" wire:model="beneficiaires_cibles">
                            @error('beneficiaires_cibles')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" class="form-control" id="image" wire:model="image" accept="image/*">
                            @error('image')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                    </div>
                </div>

                <div>
                    <button type="submit" class="btn btn-primary w-md">Enregistrer le projet</button>
                </div>
            </form>
        </div>
        <!-- end card body -->
    </div>
</div>
