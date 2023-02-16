@extends('layouts.app')


@section('main-content')
<div class="container ">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card p-5 text-center bg-primary">
                <div class="card-title text-light">
                    <h1>
                        {{ $comic->title }}
                    </h1>
                </div>
                <div class="card-img">
                    <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}" class="img-fluid">
                </div>
                <p class="text-light mt-3">
                    {{ $comic->description }}
                </p>
            </div>
        </div>
    </div>
</div>
    
@endsection