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
                            <input type="text" class="form-control" id="designation" wire:moel="designation" required>
                        </div>

                        <div class="mb-3">
                            <label for="date_debut" class="form-label">Date de début</label>
                            <input type="date" class="form-control" id="date_debut" wire:moel="date_debut" required>
                        </div>

                        <div class="mb-3">
                            <label for="duree" class="form-label">Durée</label>
                            <input type="text" class="form-control" id="duree" wire:moel="duree" required>
                        </div>

                        <div class="mb-3">
                            <label for="budget" class="form-label">Budget</label>
                            <input type="text" class="form-control" id="budget" wire:moel="budget" required>
                        </div>

                        <div class="mb-3">
                            <label for="responsable" class="form-label">Responsable</label>
                            <input type="text" class="form-control" id="responsable" wire:moel="responsable" required>
                        </div>

                        <div class="mb-3">
                            <label for="partenaires" class="form-label">Partenaires</label>
                            <input type="text" class="form-control" id="partenaires" wire:moel="partenaires" required>
                        </div>

                        <div class="mb-3">
                            <label for="region_geographique" class="form-label">Région géographique</label>
                            <input type="text" class="form-control" id="region_geographique" wire:moel="region_geographique" required>
                        </div>


                    </div>

                    <!-- Colonne de droite -->
                    <div class="col-md-6">

                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" wire:moel="description" rows="3" required></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="date_fin" class="form-label">Date de fin</label>
                            <input type="date" class="form-control" id="date_fin" wire:moel="date_fin" required>
                        </div>

                        <div class="mb-3">
                            <label for="statut" class="form-label">Statut</label>
                            <input type="text" class="form-control" id="statut" wire:moel="statut" required>
                        </div>

                        <div class="mb-3">
                            <label for="financement" class="form-label">Financement</label>
                            <input type="text" class="form-control" id="financement" wire:moel="financement" required>
                        </div>

                        <div class="mb-3">
                            <label for="objectifs" class="form-label">Objectifs</label>
                            <input type="text" class="form-control" id="objectifs" wire:moel="objectifs" required>
                        </div>
                        <div class="mb-3">
                            <label for="beneficiaires_cibles" class="form-label">Bénéficiaires Cibles</label>
                            <input type="text" class="form-control" id="beneficiaires_cibles" wire:moel="beneficiaires_cibles" required>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" class="form-control" id="image" wire:moel="image" accept="image/*" required>
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
