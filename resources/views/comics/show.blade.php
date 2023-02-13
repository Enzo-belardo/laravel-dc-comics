@extends('layouts.app')


@section('main-content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card p-5 text-center">
                <div class="card-title">
                    <h1>
                        {{ $comic->title }}
                    </h1>
                </div>
                <div class="card-img">
                    <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection