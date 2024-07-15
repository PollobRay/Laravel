@extends('layout.master') 
<!-- import code from layout/master.blade.php code -->

@section('content') <!-- push some code into at yeild('content') of master.blade --> 

    <h1>It All Blade Code Example Page</h1>
    
    {{-- Printing a string in blade --}}
    {{"Hello Blade"}}   

    {{-- Printing a string with html tag in blade --}}
    {!!"<h1>It is H1 tag in blade</h1>"!!}

    {{-- php code in blade --}}
    @php
        echo "Hello from php code";
    @endphp
    <br>

    {{-- condition in blade --}}
    @php
        $var ='apple';
    @endphp    
    @if($var == 'lichi')
        {{"It is lichi"}}
    @elseif($var == 'apple')
        {{"It is Apple"}}
    @else
        {{"Not of any"}}
    @endif
    <br>

    @isset($var)
        {{"Var is set"}}
    @endisset
    <br>

    {{-- loop in blade --}}
    @php
        $arr =['hello','hi','monosker'];
    @endphp

    @for($i=0; $i<=10; $i++)
        {{" ".$i}}
    @endfor
    <br>

    @foreach ($arr as $a)
        {{"".$a}}
        <br>
    @endforeach


@endsection