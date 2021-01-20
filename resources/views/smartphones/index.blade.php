@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Smartphone</h1>
        <div class="smartphones-box">

            @foreach ($smartphones as $smartphone)
                <div class="card">
                    <h4>{{ $smartphone->brand}}</h4>
                    <h5>{{ $smartphone->model}}</h5>
                    <h6>{{ $smartphone->price}} €</h6>
                </div>
            @endforeach
        </div>

    </div>
@endsection
