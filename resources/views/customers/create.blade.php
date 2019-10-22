@extends('layouts.app')
@section('content')

    <h1>Create a new Customer</h1>
    <br>
    {!! Form::open(['action'=>'CustomersController@store','method'=>'POST']) !!}

    <div class="form-group">
        {{Form::label('name','Customer Name:')}}
        {{Form::text('name','',['class'=>'form-control','placeholder'=>'Customer Name: '])}}
    </div>
    <div class="form-group">
        {{Form::label('web_url','Website URL:')}}
        {{Form::text('web_url','',['class'=>'form-control','placeholder'=>'Website URL: '])}}
    </div>
    {{Form::submit('Create',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection
