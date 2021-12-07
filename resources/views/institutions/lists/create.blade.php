@extends('institutions.layouts.app')

@section('content')

<h4 class="text-info"> <strong>Create New Institution </strong> </h4>

    <form action="{{route('institution.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="title" name="name" placeholder="Enter name"  required>
            </div>


        </div>


        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="description">Description</label>
                <input type="text" class="form-control" id="description" name="description" placeholder="Enter Description"  required>
            </div>


        </div>


        <button class="btn btn-primary" type="submit">Submit Info</button>
    </form>
    <br> <br>

@endsection
