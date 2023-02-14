@extends('layouts.app')
@section('main-content')
<div class="container">
    <form action="{{route('comics.store')}}" method="POST">
        @csrf
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">titolo</label>
        <input name="title" type="text" class="form-control" id="">
      </div>

      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">thumb</label>
        <input type="text" class="form-control" id="" name="thumb">
      </div>

      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Prezzo</label>
        <input type="text" class="form-control" id="" name="price" >
      </div>

      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Serie</label>
        <input type="text" class="form-control" id="" name="series" >
      </div>

      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">tipo</label>
        <input type="text" class="form-control" id="" name="type" >
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection