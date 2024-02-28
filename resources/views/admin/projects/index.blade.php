@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="d-flex ">
                <div class="col-11 ">
                    <h1>Projects</h1>
                </div>
                <div class="col-3 ">
                    <a href="{{ route('admin.projects.create') }}" class="btn btn-success">CREA POST</a>
                </div>
            </div>
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Slug</th>
                            <th scope="col">Programma</th>
                            <th scope="col">Data</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">Descrizione</th>
                            <th scope="col">Vedi</th>
                            <th scope="col">Modifica</th>
                            <th scope="col">Elimina</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($projects as $project)
                            <tr>
                                <th>{{ $project->id }}</th>
                                <td>{{ $project->nome }}</td>
                                <td>{{ $project->slug }}</td>
                                <td>{{ $project->programma }}</td>
                                <td>{{ $project->data }}</td>
                                <td><a
                                        href="{{ route('admin.types.index') }}">{{ $project->type_id ? $project->type->nome : 'Senza Tipo' }}</a>
                                </td>
                                <td>{{ $project->descrizione }}</td>
                                <td>
                                    <a href="{{ route('admin.projects.show', ['project' => $project->id]) }}">Clicca</a>
                                </td>
                                <td>
                                    <a href="{{ route('admin.projects.edit', ['project' => $project->id]) }}"
                                        class="text-warning">Modifica</a>
                                </td>
                                <td>
                                    <form action="{{ route('admin.projects.destroy', ['project' => $project->id]) }}"
                                        method="post"
                                        onsubmit="return confirm('Sei sicuro di voler eliminare questo progetto?')">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" class="text-danger" value="Elimina">
                                    </form>


                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
