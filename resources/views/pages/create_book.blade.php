@extends('layouts.app')

@section('content')

    <div class="container mt-4 w-50 border ">
        <h1 class="text-center">Create new Book</h1>


        @if($message = Session::get('success'))


        <div class="alert alert-success alert-block text-center">
                <strong>{{ $message }}</strong>
        </div>


        @endif
        {!! Form::open(['url' => ['store-book'], 'method' => 'post']) !!}
            <div class="form-group">
                {{ Form::label('title','Title') }}
                {{ Form::text('title',null,['class'=>'input-group']) }}
            </div>
            <div class="form-group">
                {{ Form::label('author','Author') }}
                {{ Form::text('author',null,['class'=>'input-group']) }}
            </div>
            <div class="form-group">
                {{ Form::label('genre','Genre') }}
                {{ Form::text('genre',null,['class'=>'input-group']) }}
            </div>

            <div class="form-group">
                {{ Form::label('price','Price') }}
                {{ Form::text('price',null,['class'=>'input-group']) }}
            </div>

            <div class="form-group shadow-none">
                {!! Form::button('Create', ['type' => 'submit', 'class' => 'btn btn-success']) !!}

            </div>
        {!! Form::close() !!}

    </div>

@endsection
