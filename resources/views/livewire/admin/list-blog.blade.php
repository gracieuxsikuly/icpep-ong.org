<div>
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <div class="row mb-12">
                    <div class="col-sm-6">
                        <!-- Barre de recherche -->
                        <div class="input-group mb-4">
                            <input wire:model="searchTerm" type="text" class="form-control" placeholder="Rechercher une publication">
                            <button type="submit" class="btn btn-primary"><i class="mdi mdi-magnify"></i> </button>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <!-- Bouton "Nouvelle méthode de livraison" -->
                        <a href="{{ route('ajoutblog') }}" class="btn btn-primary mb-2"><i class="mdi mdi-plus-circle me-2"></i> Nouvelle publication</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Table Edit</h4>
                    <div class="table-responsive">
                        <table class="table table-editable table-nowrap align-middle table-edits">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Image</th>
                                    <th>Titre</th>
                                    <th>Contenu</th>
                                    <th>Auteur</th>
                                    <th>Publié</th>
                                    <th>Notation</th>

                                    <th>Vues</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($blogs as $blog)
                                    <tr data-id="{{ $blog->id }}">
                                        <td data-field="id" style="width: 80px">{{ $blog->id }}</td>
                                        <td data-field="image">
                                            <img src="{{ asset('assets/images/publication/' . $blog->image) }}" alt="{{ $blog->image }}" class="avatar-sm">
                                            </td>
                                        <td data-field="titre">{{ $blog->titre }}</td>
                                        <td data-field="contenu">{{ Str::of($blog->contenu)->limit(15) }}</td>
                                        <td data-field="auteur">{{ $blog->auteur->email }}</td>
                                        <td data-field="publie">
                                            @livewire('admin.toggle-switchprojet', [
                                                'model' => $blog,
                                                'field' => 'publie',
                                                'idblog' => $blog->id,
                                            ])
                                            {{-- {{ $blog->publie }} --}}
                                        </td>
                                        <td data-field="notation">{{ $blog->notation }}</td>

                                        <td data-field="vue">{{ $blog->vue }}</td>
                                        <td style="width: 100px">
                                            <a wire:click.prevent="delete({{$blog->id}})"  class="btn btn-outline-secondary btn-sm edit" title="Delete">
                                                <i class="mdi mdi-delete"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <center>
                        @if (count($blogs))
                            {{ $blogs->links('vendor.pagination.bootstrap-4-2') }}
                        @endif
                    </center>


                </div>
            </div>
        </div> <!-- end col -->
    </div>
</div>
