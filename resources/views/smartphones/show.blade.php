@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>product details</h1>
        <h3>Brand: {{$smartphone->brand}}</h3>
        <h5>Model: {{$smartphone->model}}</h5>
        <ul>
            <li>Memory: {{$smartphone->memory}}</li>
            <li>Ram: {{$smartphone->ram}}</li>
            <li>Battery: {{$smartphone->battery}}</li>
            <li>Camera: {{$smartphone->camera}}</li>
        </ul>
        <h5>Price: {{ $smartphone->price}} €</h5>

    </div>
@endsection
