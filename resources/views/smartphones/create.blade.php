@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Smartphone new</h1>
        <form method="POST" action="{{ route('smartphones.store') }}">
            @csrf
            <div class="form-group">
                <label for="">Brand</label>
                <input class="form-control" type="text" name="brand" value="">
            </div>
            <div class="form-group">
                <label for="">Model</label>
                <input class="form-control" type="text" name="model" value="">
            </div>
            <div class="form-group">
                <label for="">Memory</label>
                <input class="form-control" type="text" name="memory" value="">
            </div>
            <div class="form-group">
                <label for="">Ram</label>
                <input class="form-control" type="text" name="ram" value="">
            </div>
            <div class="form-group">
                <label for="">Battery</label>
                <input class="form-control" type="text" name="battery" value="">
            </div>
            <div class="form-group">
                <label for="">Camera</label>
                <input class="form-control" type="text" name="camera" value="">
            </div>
            <div class="form-group">
                <label for="">Price</label>
                <input class="form-control" type="text" name="price" value="">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-dark">
                    Salva
                </button>

            </div>
        </form>

    </div>
@endsection
