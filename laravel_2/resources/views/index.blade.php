@extends('layout.master') 
<!-- import code from layout/master.blade.php code -->

@section('content') <!-- push some code into at yeild('content') of master.blade --> 

    <div class="container mt-4">
        <div class="d-flex justify-content-evenly">
            <h2 class="text-center">Add a New Member</h2>
            <a href="{{route('add')}}" type="button" class="btn btn-primary btn-lg">Add Member</a>
        </div>
        
         {{-- Alert Message--}}
         @if(session('status'))
         <div class="alert alert-success alert-dismissible fade show" role="alert">
             {{session('status')}}
             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>  
         @endif

        <div class="mt-4">
            <h2 class="text-center">All Members</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Operation</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($members as $member)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$member->name}}</td>
                        <td>{{$member->description}}</td>
                        <td>
                            <div class="d-flex justify-content-around">
                                <a href="{{route('view_member',$member->id)}}" type="button" class="btn btn-primary">View</a>
                                <a href="{{route('update',$member->id)}}" type="button" class="btn btn-success">Update</a>
                                <form action="{{ route('delete_member') }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" name="id" name="id" value="{{ $member->id }}">
                                    <button type="submit" class="btn btn-danger">Delete Member</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    

@endsection