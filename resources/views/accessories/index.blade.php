@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Accessories</h1>
        <a href="{{ route('accessories.create') }}" class="btn btn-primary my-3">
            Add new accessory
        </a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Brand</th>
                    <th scope="col">Model</th>
                    <th scope="col">Categories</th>
                    <th scope="col">Price</th>
                    <th scope="col">More</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($accessories as $accessory)
                    <tr>
                        <td>
                            {{ $accessory->id }}
                        </td>
                        <td>
                            {{ $accessory->brand }}
                        </td>
                        <td>
                            {{ $accessory->model }}
                        </td>
                        <td>
                            {{ $accessory->categories }}
                        </td>
                        <td>
                            {{ number_format($accessory->price, 2, ',', ' ') }} €
                        </td>
                        <td>
                            <a href="{{ route('accessories.show', ['accessory' => $accessory->id]) }}"
                                class="btn btn-info">
                                More
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endsection
