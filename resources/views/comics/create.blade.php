@extends('layouts.app')

@section('main-content')
<div class="container">
    <form action="{{route('comics.store')}}" method="POST">
        @csrf

        @if ($errors->any())
          <div class="alert alert-warning">
            <ul>
              @foreach($errors->all() as $error)
                <li>
                  {{ $error }}
                </li>
              @endforeach
            </ul>
          </div>
        @endif
        <div class="mb-3">
          <label class="form-label">titolo</label>
          <input  type="text" class="form-control" id="" name="title">
        </div>

        <div class="mb-3">
          <label class="form-label">thumb</label>
          <input type="text" class="form-control" id="" name="thumb">
        </div>

        <div class="mb-3">
          <label class="form-label">descrizione</label>
          <textarea type="text" id="" class="form-control" name="description"></textarea>
        </div>

      
        <div class="mb-3">
          <label class="form-label">Prezzo</label>
          <input type="text" class="form-control" id="" name="price" >
        </div>
        
        <div class="mb-3">
            <label class="form-label">Serie</label>
            <input type="text" class="form-control" id="" name="series" >
        </div>
        
        <div class="mb-3">
          <label class="form-label">uscita</label>
          <textarea type="text" id="" class="form-control" name="sale_date"></textarea>
        </div>

        <div class="mb-3">
          <label class="form-label">tipo</label>
          <input type="text" class="form-control" id="" name="type" >
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection