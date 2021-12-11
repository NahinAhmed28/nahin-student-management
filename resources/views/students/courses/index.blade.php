@extends('students.layouts.app')

@section('content')

<h4>students Course List</h4>

<div class="card-body table-full-width table-responsive">
    <table class="table table-hover table-striped">
        <thead class="badge-dark">
        <th>ID</th>
        <th>Course Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Credit</th>
        <th>Institution</th>
        <th>Disciplines</th>
        </thead>
        <tbody>

        @foreach($courses as $course)
            <tr>
                <td>{{$course->id}}</td>
                <td>{{$course->name}}</td>
                <td>{{$course->description}}</td>
                <td>{{$course->price}}</td>
                <td>{{$course->credit}}</td>
                <td>{{$course->institution->name}}</td>
                <td>
                    @foreach($courses as $course)
                        {{$course->disciplines->pluck('name')->implode(',')}}
                    @endforeach
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

@endsection
