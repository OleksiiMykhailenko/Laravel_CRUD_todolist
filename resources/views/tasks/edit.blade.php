@extends('layout')

@section('content')

    @include('errors')

    <div class="container">
        <h3>Edit task # - {{$task->id}}</h3>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">

                {!! Form::open(['route' => ['tasks.update', $task->id], 'method' => 'PUT']) !!}
                <div class="form-group">
                    <p>Title:</p>
                    <input type="text" class="form-control" name="title" value="{{$task->title}}">
                    <br>
                    <p>Description:</p>
                    <textarea name="description" id="" cols="30" rows="10"
                              class="form-control">{{$task->description}}</textarea>
                    <br>
                    <button class="btn btn-warning">Submit</button>
                </div>

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection