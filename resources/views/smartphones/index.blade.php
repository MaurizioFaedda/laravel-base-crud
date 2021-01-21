@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Smartphone</h1>
        <a href="{{ route('smartphones.create') }}" class="btn btn-primary my-3">
            Add new smartphone
        </a>
        <form method="get" action="{{route('smartphones.index')}}">
            @csrf
            <select name="price">
                <option value=" ">Order By </option>
                <option value="asc">asc</option>
                <option value="desc">desc</option>
            </select>
            <button type="submit">Search</button>
        </form>

        {{-- <form method="get" action="{{route('smartphones.index')}}">
                @csrf
            <select name="category">
                <option value="price">Price</option>
                <option value="brand">A-Z</option>
                <option value="id">Memory</option>
            </select>
            <button type="submit">Search</button>

        </form> --}}

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Brand</th>
                    <th scope="col">Model</th>
                    <th scope="col">Memory</th>
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
                            {{ $smartphone->memory }}
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
