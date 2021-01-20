@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Smartphone</h1>
        <div class="smartphones-box">

            @foreach ($smartphones as $smartphone)
                <a href="{{route('smartphones.show', ['smartphone' => $smartphone->id]) }}">
                    <div class="card">
                        <h4>{{ $smartphone->brand}}</h4>
                        <h5>{{ $smartphone->model}}</h5>
                        <h6>{{ $smartphone->price}} €</h6>
                    </div>
                </a>
            @endforeach
        </div>

    </div>
@endsection
