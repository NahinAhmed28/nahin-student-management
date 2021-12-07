@extends('institutions.layouts.app')

@section('content')

<h4 class="text-info"> <strong>Create New Course </strong> </h4>

    <form action="{{route('course.store')}}" method="POST" enctype="multipart/form-data">
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

        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="price">Price</label>
                <input type="text" class="form-control" id="price" name="price" placeholder="Enter price"  required>
            </div>
        </div>

        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="credit">Credit</label>
                <input type="text" class="form-control" id="credit" name="credit" placeholder="Enter credit"  required>
            </div>
        </div>
{{--        <div class="form-row">--}}
{{--            <div class="col-md-6 mb-3">--}}
{{--                <label for="device">Select Discipline</label>--}}
{{--                <select class="custom-select" id="inputGroupSelect03" name="discipline_id">--}}
{{--                    <option selected>select...</option>--}}
{{--                    @foreach($disciplines as $discipline)--}}
{{--                        <option value="{{$discipline->id}}">{{$discipline->name}}</option>--}}
{{--                    @endforeach--}}
{{--                </select>--}}
{{--            </div>--}}
{{--        </div>--}}

        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="device">Select Institution</label>
                <select class="custom-select" id="inputGroupSelect03" name="institution_id">
                    <option selected>select...</option>
                    @foreach($institutions as $institute)
                        <option value="{{$institute->id}}">{{$institute->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <button class="btn btn-success" type="submit">Submit Info</button>
    </form>
    <br> <br>

@endsection
