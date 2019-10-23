@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="/customers/create" class="btn btn-primary">Create a new Customer</a> <hr><br>
                    <h1> Customers</h1>
                        @if(count($customers)>0)
                            <table class="table-striped table">
                                <tr>
                                    <th>Name</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                {{--                            @if(is_array($customers))--}}
                                @foreach($customers as $customer)
                                    <tr>
                                        <td>{{$customer->name}}</td>
                                        <td><a href="/customers/{{$customer->id}}/edit" class="btn btn-primary">Edittt</a></td>
                                        <td>
                                            {!!Form::open(['action'=>['CustomersController@destroy', $customer->id],'method'=>'POST','class'=>'btn btn-primary,pull-right'])!!}
                                            {{Form::hidden('_method','DELETE')}}
                                            {{Form::submit('Delete the Post',['class'=>'btn btn-danger'])}}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                {{--                            @endif--}}
                            </table>
                        @else
                            <p> No Customers</p>
                        @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
