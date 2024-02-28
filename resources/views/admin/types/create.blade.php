@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 ">
                <h1>Crea il tipo</h1>
            </div>
            <div class="col-12">
                <form action="{{ route('admin.types.store') }}" method="post">
                    @csrf
                    <div class="form-group py-2">
                        <label for="nome" class="control-label">Nome Tipo</label>
                        <input type="text" name="nome" id="nome" placeholder="tipo" class="form-control">
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
