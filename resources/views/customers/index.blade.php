@extends('layouts.app')
@section('content')

<h1>Customers</h1>
<br>
    @if(count($customers)>0)
        @foreach($customers as $customer)
            <div class="well ">
                <h3><a href="/customers/{{$customer->id}}"> {{$customer->name}}</a></h3>
                <br>
                <small>Created on {{$customer->created_at}}
                    <br><br>
                    <br><br><br>
                    <br>

                </small>
            </div>
        @endforeach
        {{$customers->links()}}
    @else
        <p> No Customers Found</p>
    @endif
@endsection
