@extends('layouts.app')

@section('main-content')
<div class="container">
    <form action="{{ route('comics.update', $comic->id) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="mb-3">
          <label class="form-label">titolo</label>
          <input  type="text" class="form-control" id="" name="title" value="{{$comic->title}}" >
        </div>

        <div class="mb-3">
          <label class="form-label">thumb</label>
          <input type="text" class="form-control" id="" name="thumb" value="{{$comic->thumb}}" >
        </div>

        <div class="mb-3">
          <label class="form-label">descrizione</label>
          <textarea type="text" id="" class="form-control" name="description" > {{ $comic->description }} </textarea>
        </div>

      
        <div class="mb-3">
          <label class="form-label">Prezzo</label>
          <input type="text" class="form-control" id="" name="price" value="{{$comic->price}}"  >
        </div>
        
        <div class="mb-3">
            <label class="form-label">Serie</label>
            <input type="text" class="form-control" id="" name="series" value="{{$comic->series}}"  >
        </div>
        
        <div class="mb-3">
          <label class="form-label">uscita</label>
          <input type="text" class="form-control" id="" name="sale_date" value="{{$comic->sale_date}}" >
        </div>

        <div class="mb-3">
          <label class="form-label">tipo</label>
          <input type="text" class="form-control" id="" name="type" value="{{$comic->type}}" >
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection