@extends('institutions.layouts.app')
@section('content')


    <strong>ADD User Info </strong>
    <div style="float: right" > <a href="{{route('user.index')}}" class="btn btn-info btn-fill btn-wd"
                                   style="width: 50px;text-decoration: none;padding: 8px 16px;margin-right: 20rem; "> Go Back </a>
    </div>
    <form action="{{route('user.update',$user->id)}}" method="post" >
        @csrf
        @method('PUT')
        <div class="form-row">
           <div class="col-md-6 mb-3">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="{{$user->name}}"  required>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="{{$user->email}}"  required>
            </div>
        </div>


        <button class="btn btn-info" type="submit">Submit Info</button>
    </form>
    <br> <br>


@endsection
