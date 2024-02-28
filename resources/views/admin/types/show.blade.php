@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 p-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $type->nome }}</h5>
                        <p class="card-text">{{ $type->slug }}</p>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
