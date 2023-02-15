@extends('layouts.app')

@section('title' , 'DC Comics')

@section('main-content')
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Titolo</th>
                <th scope="col">Prezzo</th>
                <th scope="col">Uscita</th>
                <th scope="col">Serie</th>
            </tr>
        </thead>

        @foreach ($comics as $comic)
        <tbody>
            <tr>
                <td>{{ $comic->id }}</td>
                <td>{{ $comic->title }}</td>
                <td>{{ $comic->price }}</td>
                <td>{{ $comic->sale_date }}</td>
                <td>{{ $comic->series }}</td>
                <td> <a class = "btn btn-sm btn-primary " href=" {{ route ( 'comics.show' , $comic->id ) }}" >Show</a></td>
                <td> <a class = "btn btn-sm btn-secondary " href=" {{ route ( 'comics.edit' , $comic->id ) }}" >Edit</a></td>
                <td>
                    <form action="{{ route ( 'comics.destroy' , $comic->id ) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
        </tbody>
        @endforeach 
    </table> 
</div>
@endsection