@extends('institutions.layouts.app')

@section('content')

<h4 class="text-info"> <strong>Create New Discipline </strong> </h4>

    <form action="{{route('discipline.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="title" name="name" placeholder="Enter name"  required>
            </div>
        </div>

{{--        <div class="form-row">--}}
{{--            <div class="col-md-6 mb-3">--}}
{{--                <label for="device">Select Course</label>--}}
{{--                <select class="custom-select" id="inputGroupSelect03" name="course_id">--}}
{{--                    <option selected>select...</option>--}}
{{--                    @foreach($courses as $course)--}}
{{--                        <option value="{{$course->id}}">{{$course->name}}</option>--}}
{{--                    @endforeach--}}
{{--                </select>--}}
{{--            </div>--}}
{{--        </div>--}}


        <button class="btn btn-success" type="submit">Submit Info</button>
    </form>
    <br> <br>

@endsection
