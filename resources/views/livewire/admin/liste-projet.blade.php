<div>
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Liste de projets</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Liste de projet</h4>
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <!-- Barre de recherche -->
                            <div class="input-group mb-4">
                                <input wire:model="searchTerm" type="text" class="form-control" placeholder="Rechercher un projet">
                                <button type="submit" class="btn btn-primary"><i class="mdi mdi-magnify"></i> </button>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- Bouton "Nouvelle méthode de livraison" -->
                            <a href="{{ route('ajoutprojet') }}" class="btn btn-primary mb-2"><i class="mdi mdi-plus-circle me-2"></i> Nouveau projet</a>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-nowrap mb-0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Image</th>
                                    <th>Designation</th>
                                    <th>Description</th>
                                    <th>Date Debut</th>
                                    <th>Date Fin</th>
                                    <th>Duree</th>
                                    <th>Statut</th>
                                    <th>Budget</th>
                                    <th>Financement</th>
                                    <th>Responsable</th>
                                    <th>Objectifs</th>
                                    <th>Indicateurs</th>
                                    <th>Partenaires</th>
                                    <th>Region Geographique</th>
                                    <th>Beneficiaires Cibles</th>
                                    {{-- <th>Activites</th> --}}
                                    {{-- <th>Evaluations Rapports</th> --}}
                                    {{-- <th>Documents Associes</th> --}}

                                    <th>Suprimer</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($projets as $projet)
                                    <tr data-id="{{ $projet->id }}">
                                        <td data-field="id">{{ $projet->id }}</td>
                                        <td data-field="image">
                                            <img src="{{ asset('assets/images/project/' . $projet->image) }}" alt="{{ $projet->image }}" class="avatar-sm">
                                            </td>
                                        <td data-field="designation">{{ $projet->designation }}</td>
                                        <td data-field="description">{{ Str::of($projet->description)->limit(15) }}</td>
                                        <td data-field="date_debut">{{ $projet->date_debut }}</td>
                                        <td data-field="date_fin">{{ $projet->date_fin }}</td>
                                        <td data-field="duree">{{ $projet->duree }}</td>
                                        <td data-field="statut">
                                            @if ($projet->statut == 'En cours')
                                            <div class="btn-group">
                                                <button class="btn btn-info btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    {{ $projet->statut }} <i class="mdi mdi-chevron-down"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                   <a class="dropdown-item" style="cursor: pointer;" wire:click="status({{$projet->id}},'1')">En attente</a>
                                                    <a class="dropdown-item" style="cursor: pointer;" wire:click="status({{$projet->id}},'3')">Terminé</a>
                                                </div>
                                            </div>

                                            @elseif($projet->statut == 'En attente')
                                            <div class="btn-group">
                                                <button class="btn btn-warning btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    {{ $projet->statut }} <i class="mdi mdi-chevron-down"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" style="cursor: pointer;" wire:click="status({{$projet->id}},'2')">En cours</a>
                                                    <a class="dropdown-item" style="cursor: pointer;" wire:click="status({{$projet->id}},'3')">Terminé</a>
                                                </div>
                                            </div>

                                            @elseif($projet->statut == 'Terminé')
                                            <div class="btn-group">
                                                <button class="btn btn-success btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    {{ $projet->statut }} <i class="mdi mdi-chevron-down"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                   <a class="dropdown-item"  style="cursor: pointer;" wire:click="status({{$projet->id}},'1')">En attente</a>
                                                    <a class="dropdown-item" style="cursor: pointer;" wire:click="status({{$projet->id}},'2')">En cours</a>
                                                    <a class="dropdown-item"  style="cursor: pointer;" wire:click="status({{$projet->id}},'3')">Terminé</a>
                                                </div>
                                            </div>
                                            @endif
                                        </td>
                                        <td data-field="budget">{{ $projet->budget }}USD</td>
                                        <td data-field="financement">{{ $projet->financement }}</td>
                                        <td data-field="responsable">{{ $projet->responsable }}</td>
                                        <td data-field="objectifs">{{ $projet->objectifs }}</td>
                                        <td data-field="indicateurs">
                                            <input type="number"  class="form-control"  value="{{ $projet->indicateurs }}" wire:change="indicateurs({{$projet->id}},$event.target.value)"
                                           >
                                            {{-- {{ $projet->indicateurs }} --}}
                                        </td>
                                        <td data-field="partenaires">{{ $projet->partenaires }}</td>
                                        <td data-field="region_geographique">{{ $projet->region_geographique }}</td>
                                        <td data-field="beneficiaires_cibles">{{ $projet->beneficiaires_cibles }}</td>
                                        {{-- <td data-field="activites">{{ $projet->activites }}</td> --}}
                                        {{-- <td data-field="evaluations_rapports">{{ $projet->evaluations_rapports }}</td> --}}
                                        {{-- <td data-field="documents_associes">{{ $projet->documents_associes }}</td> --}}


                                        <td style="width: 100px">
                                            <a wire:click.prevent="delete({{$projet->id}})"  class="btn btn-outline-secondary btn-sm edit" title="Delete">
                                                <i class="mdi mdi-delete"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="16">Aucun projet trouvé</td>
                                    </tr>
                                @endforelse

                            </tbody>
                        </table>
                        {{-- <center>
                            @if (count($projets))
                                {{ $projets->links('vendor.livewire.bootstrap') }}
                            @endif
                        </center> --}}
                    </div>

                </div>
            </div>
        </div> <!-- end col -->
    </div>
</div>
