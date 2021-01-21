@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Smartphone</h1>
        <a href="{{ route('smartphones.create') }}" class="btn btn-primary my-3">
            Add new smartphone
        </a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Brand</th>
                    <th scope="col">Model</th>
                    <th scope="col">Price</th>
                    <th scope="col">More</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($smartphones as $smartphone)
                    <tr>
                        <td>
                            {{ $smartphone->id }}
                        </td>
                        <td>
                            {{ $smartphone->brand }}
                        </td>
                        <td>
                            {{ $smartphone->model }}
                        </td>
                        <td>
                            {{ number_format($smartphone->price, 2, ',', ' ') }} €
                        </td>
                        <td>
                            <a href="{{ route('smartphones.show', ['smartphone' => $smartphone->id]) }}"
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
