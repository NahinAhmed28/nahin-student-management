@extends('students.layouts.app')

@section('content')

    <div class="m-3">
        <h4>students enrollment create</h4>

        <form action="{{route('enrollment.store')}}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="device">Select Course</label>
                    <select class="form-control custom-select" id="inputGroupSelect03" name="course_id">
                        <option selected>select...</option>
                        @foreach($courses as $course)
                            <option value="{{$course->id}}">{{$course->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>


{{--            <div class="form-row">--}}
{{--                <div class="col-md-6 mb-3">--}}
{{--                    <label for="device">Select Institution</label>--}}
{{--                    <select class="form-control custom-select" id="inputGroupSelect03" name="institution_id">--}}
{{--                        <option selected>select...</option>--}}
{{--                        @foreach($institutions as $institute)--}}
{{--                            <option value="{{$institute->id}}">{{$institute->name}}</option>--}}
{{--                        @endforeach--}}
{{--                    </select>--}}
{{--                </div>--}}
{{--            </div>--}}

            <button class="btn btn-success" type="submit">Submit Info</button>
        </form>
        <br> <br>
    </div>


@endsection
