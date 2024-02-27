@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 p-4">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('/storage/' . $project->emulazione) }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">{{ $project->nome }}</h5>
                        <p class="card-text">{{ $project->slug }}</p>
                        <p class="card-text">{{ $project->programma }}</p>
                        <p class="card-text">{{ $project->data }}</p>
                        <p class="card-text">{{ $project->descrizione }}</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
