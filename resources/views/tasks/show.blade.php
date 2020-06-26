@extends('layout')

@section('content')

    @include('errors')

    <div class="container">
        <div class="row">
            <h3>Your task # - {{$task->id}}</h3>
            <div class="col-md-10">
                <p>Title:</p>
                <h4>{{$task->title}}</h4>
                <br>
                <p>Description:</p>
                <p>{{$task->description}}</p>
            </div>
        </div>
    </div>
@endsection