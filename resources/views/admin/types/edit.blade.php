@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 ">
                <h1>Modifica il tipo</h1>
            </div>
            <div class="col-12">
                <form action="{{ route('admin.types.update', $type->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group py-2">
                        <label for="nome" class="control-label">Nome Tipo</label>
                        <input type="text" name="nome" id="nome" placeholder="Tipo" value=""
                            class="form-control">
                        @error('nome')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group py-2">
                        <input type="submit" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
