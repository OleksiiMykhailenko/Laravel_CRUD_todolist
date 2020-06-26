@extends('layout')

@section('content')

    <h3>Create task:</h3>

    @include('errors')

    <div class="row">
        <div class="col-md-10 col-md-offset-1">

            {!! Form::open(['route' => ['tasks.store']]) !!}
            <div class="form-group">
                <p>Title:</p>
                <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                <br>
                <p>Description:</p>
                <textarea name="description" id="" cols="30" rows="10" class="form-control">{{ old('description') }}</textarea>
                <br>
                <button class="btn btn-success">Submit</button>
            </div>

            {!! Form::close() !!}
        </div>
    </div>
@endsection