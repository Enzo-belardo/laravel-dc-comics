@extends('layouts.app')

@section('title' , 'DC Comics')

@section('main-content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">title</th>
                <th scope="col">price</th>
                <th scope="col">sale_date</th>
            </tr>
        </thead>

        @foreach ($comics as $comic)
        <tbody>
            <tr>
                <td>{{ $comic->id }}</td>
                <td>{{ $comic->title }}</td>
                <td>{{ $comic->price }}</td>
                <td>{{ $comic->sale_date }}</td>
            </tr>
        </tbody>
        @endforeach 
    </table> 
@endsection