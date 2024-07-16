@extends('layout.master') 
<!-- import code from layout/master.blade.php code -->

@section('content') <!-- push some code into at yeild('content') of master.blade --> 

    <div class="container mt-4 bg-light">
        <div class="d-flex justify-content-evenly">
            <h2 class="text-center">Update The Member Details</h2>
        </div>
        
        {{-- Alert Message--}}
        @if(session('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{session('status')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>  
        @endif

        <div class="mt-4">
            <form action="{{route('update_member',$member->id)}}" class="mx-auto" enctype="multipart/form-data" method="POST">
                @csrf
                @method('PUT')
                <!-- Name input -->
                <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="form4Example1">Name</label>
                    <input name="name" type="text" value="{{$member->name}}" id="form4Example1" class="form-control" />
                </div>
              
                <!-- Description input -->
                <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="form4Example3">Description</label>
                    <textarea name="description" class="form-control" id="form4Example3" rows="4">{{$member->description}}</textarea> 
                </div>
                
                <!-- Image input -->
                <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="customFile">Image</label>
                    <input name="image" type="file" class="form-control" id="customFile" />
                </div>

                <!-- Submit button -->
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
        </div>
    </div>
    

@endsection