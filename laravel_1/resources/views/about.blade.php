@extends('layout.master') 
<!-- import code from layout/master.blade.php code -->

@section('content') <!-- push some code into at yeild('content') of master.blade --> 

    <h1>It is About Page</h1>
    <a href="{{route('post_page')}}">post page</a>
    <br>
    <a href="{{route('add')}}">add student</a>
    <br>

    @foreach ($data as $item)
        {{$item->name}}
        <br>
    @endforeach

@endsection