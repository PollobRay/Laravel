@extends('layout.master') 
<!-- import code from layout/master.blade.php code -->

@section('content') <!-- push some code into at yeild('content') of master.blade --> 

    <h1>Add Student</h1>

    <form method="post" action="{{route('add_student')}}">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Name</label>
          <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" name="city" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter city">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" name="city_id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter city id">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    

@endsection