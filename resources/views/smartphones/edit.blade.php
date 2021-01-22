@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Smartphone Edit</h1>
        <form method="POST" action="{{ route('smartphones.update', ['smartphone' => $smartphone->id]) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="">Brand</label>
                <input class="form-control" type="text" name="brand" value="{{ $smartphone->brand}}">
            </div>
            <div class="form-group">
                <label for="">Model</label>
                <input class="form-control" type="text" name="model" value="{{ $smartphone->model}}">
            </div>
            <div class="form-group">
                <label for="">Memory</label>
                <input class="form-control" type="text" name="memory" value="{{ $smartphone->memory}}">
            </div>
            <div class="form-group">
                <label for="">Ram</label>
                <input class="form-control" type="text" name="ram" value="{{ $smartphone->ram}}">
            </div>
            <div class="form-group">
                <label for="">Battery</label>
                <input class="form-control" type="text" name="battery" value="{{ $smartphone->battery}}">
            </div>
            <div class="form-group">
                <label for="">Camera</label>
                <input class="form-control" type="text" name="camera" value="{{ $smartphone->camera}}">
            </div>
            <div class="form-group">
                <label for="">Price</label>
                <input class="form-control" type="text" name="price" value="{{ $smartphone->price}}">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-dark">
                    Modifica
                </button>

            </div>
        </form>

    </div>
@endsection
