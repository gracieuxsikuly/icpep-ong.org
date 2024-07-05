<div>
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Ajouter la publication</h4>

                    <form wire:submit.prevent='saveblog'>
                        <div class="mb-3">
                            <label for="titre" class="form-label">Titre</label>
                            <input wire:model="titre" type="text" class="form-control" id="titre">
                            @error('titre') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="mb-3">
                            <label for="contenu" class="form-label">Contenu</label>
                            <textarea wire:model="contenu" class="form-control" rows="3"></textarea>
                            @error('contenu') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>


                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input wire:model="image" type="file" class="form-control" id="image">
                            @error('image') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        {{-- <div class="mb-3">
                            <label for="videolink" class="form-label">Video de la publication</label>
                            <input wire:model="videolink" type="file" class="form-control" id="videolink" accept="video/*">
                            @error('videolink') <span class="text-danger">{{ $message }}</span> @enderror
                        </div> --}}

                        <div class="mb-3">
                            <label for="videolink" class="form-label">liens video de la publication</label>
                            <input wire:model="videolink" type="text" class="form-control" id="videolink">
                            @error('videolink') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div>
                            <button type="submit" class="btn btn-primary w-md">Enregistrer la publication</button>
                        </div>
                    </form>
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->


        <!-- end col -->
    </div>
</div>
