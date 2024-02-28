@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 ">
                <h1>Crea il tipo: {{ $type->nome }}</h1>
            </div>
            <div class="col-12">
                <form action="{{ route('admin.types.store', $type->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group py-2">
                        <label for="type_id" class="control-label">Emulazione</label>
                        <select type="select" name="type_id" id="type_id" placeholder="tipo" class="form-select">
                            <option value="">Tipo</option>
                            @foreach ($types as $type)
                                <option value="{{ $type->id }}" @selected($type->id == old('type_id', $type->type ? $type->type->id : ''))>{{ $type->nome }}
                                </option>
                            @endforeach
                        </select>
                        @error('type_id')
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
