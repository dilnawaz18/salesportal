@extends('layouts.app')
@section('content')
    <a href="/customers" class="btn btn-dark">Go Back</a>
    <br> <br>
    <h1>{{$customer->name}}</h1>


    <small>Created on {{$customer->created_at}}</small> <hr>
    <a href="/customers/{{$customer->id}}/edit" class="btn btn-primary">Editt
    </a></hr>

        {!!Form::open(['action'=>['CustomersController@destroy', $customer->id],'method'=>'POST','class'=>'btn btn-primary,pull-right'])!!}
        {{Form::hidden('_method','DELETE')}}
        {{Form::submit('Delete the Post',['class'=>'btn btn-danger'])}}
        {!! Form::close() !!}
    </hr>
@endsection
