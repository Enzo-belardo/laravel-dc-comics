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
          <input  type="text" class="form-control" name="title" value="{{ old('title') }}" id="" >
        </div>

        <div class="mb-3">
          <label class="form-label">thumb</label>
          <input type="text" class="form-control" name="thumb" value="{{ old('thumb') }}"  id="" >
        </div>

        <div class="mb-3">
          <label class="form-label">descrizione</label>
          <textarea type="text" id="" name="description" value="{{ old('description') }}" class="form-control" ></textarea>
        </div>

      
        <div class="mb-3">
          <label class="form-label">Prezzo</label>
          <input type="text" class="form-control" name="price"  value="{{ old('price') }}" id="" >
        </div>
        
        <div class="mb-3">
            <label class="form-label">Serie</label>
            <input type="text" class="form-control" name="series" value="{{ old('series') }}" id="" >
        </div>
        
        <div class="mb-3">
          <label class="form-label">uscita</label>
          <input type="text" id="" class="form-control" name="sale_date" value="{{ old('sale_date') }}" ></input>
        </div>

        <div class="mb-3">
          <label class="form-label">tipo</label>
          <input type="text" class="form-control" name="type" value="{{ old('type') }}" id="" >
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection