@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Accessory new</h1>
        <form method="POST" action="{{ route('accessories.store') }}">
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
                <label for="">Categories</label>
                <input class="form-control" type="text" name="categories" value="">
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
