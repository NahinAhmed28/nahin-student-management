@extends('students.layouts.app')

@section('content')




<h4> students enrollment courses list</h4>
<div class="card-body table-full-width table-responsive">
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
