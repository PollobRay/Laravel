@extends('layout.master') 
<!-- import code from layout/master.blade.php code -->

@section('content') <!-- push some code into at yeild('content') of master.blade --> 

    @foreach ($data as $item)
        {{$item->name}}
        <br>
    @endforeach

@endsection