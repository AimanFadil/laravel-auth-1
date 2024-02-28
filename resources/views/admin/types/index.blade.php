@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="d-flex ">
                <div class="col-11 ">
                    <h1>Projects</h1>
                </div>
                <div class="col-3 ">
                    <a href="{{ route('admin.types.create') }}" class="btn btn-success">CREA TIPO</a>
                </div>
            </div>
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Slug</th>
                            <th scope="col">Vedi</th>
                            <th scope="col">Modifica</th>
                            <th scope="col">Elimina</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($types as $type)
                            <tr>
                                <th>{{ $type->id }}</th>
                                <td>{{ $type->nome }}</td>
                                <td>{{ $type->slug }}</td>
                                <td>
                                    <a href="{{ route('admin.types.show', ['type' => $type->id]) }}">Clicca</a>
                                </td>
                                <td>
                                    <a href="{{ route('admin.types.edit', ['type' => $type->id]) }}"
                                        class="text-warning">Modifica</a>
                                </td>
                                <td>
                                    <form action="{{ route('admin.types.destroy', ['type' => $type->id]) }}" method="post"
                                        onsubmit="return confirm('Sei sicuro di voler eliminare questo tipo?')">
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
