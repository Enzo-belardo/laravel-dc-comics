@extends('layouts.app')
@section('main-content')
<div class="container">
    <form action="{{route('comics.store')}}" methods="POST">
        @csrf
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="text" class="form-control" id="" >
      </div>

      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control">
      </div>

      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control">
      </div>

      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control">
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection