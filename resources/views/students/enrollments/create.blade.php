@extends('students.layouts.app')

@section('content')

    <div class="m-3" style="margin-bottom: 20px">
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

            <button class="btn btn-success" type="submit">Submit Info</button>
        </form>
    </div>




    <div class="card-body table-full-width table-responsive">
        <h4 class="" style="margin-top: 50px"> Available Courses List</h4>
        <table class="table table-hover table-striped">
            <thead class="badge-dark">
            <th>ID</th>
            <th>Student<br> Name</th>
            <th>Student<br> Email</th>
            <th>Course<br> Name</th>
            <th>Course <br>Credit</th>
            <th>Course <br>Price</th>
            <th>Course <br> Institution</th>
            <th></th>
            <th></th>
            </thead>
            <tbody>
            @foreach($enrollments as $enrollment)
                <tr>
                    <td>{{$enrollment->id}}</td>
                    <td>{{$enrollment->user->name}}</td>
                    <td>{{$enrollment->user->email}}</td>
                    <td> {{$enrollment->course->name}}</td>
                    <td> {{$enrollment->course->credit}}</td>
                    <td> {{$enrollment->course->price}}</td>
                    <td> {{$enrollment->course->institution->name}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>


@endsection
