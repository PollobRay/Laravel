@extends('layout.master') 
<!-- import code from layout/master.blade.php code -->

@section('content') <!-- push some code into at yeild('content') of master.blade --> 

    <div class="container mt-4">
        <div class="d-flex justify-content-evenly">
            <h2 class="text-center">Details of The member</h2>
        </div>
        <div class="mt-4">
            <div class="card mx-auto col-6" >
                <img class="card-img-top" src="@if($member->image){{asset($member->image)}}@else {{asset('uploads/member/member.png')}} @endif" alt="Card image cap">
                <div class="card-body">
                  <h3><b>Name: </b>{{$member->name}}</h3>
                  <h4><b>Description: </b>{{$member->description}}</h4>
                </div>
              </div>
        </div>
    </div>
    

@endsection