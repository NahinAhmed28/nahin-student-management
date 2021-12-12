@extends('students.layouts.app')

@section('content')




<h4> students enrollment courses list</h4>
<div class="card-body table-full-width table-responsive">
    <table class="table table-hover table-striped">
        <thead class="badge-dark">
        <th>ID</th>
        <th>Student Name</th>
        <th>Student Email</th>
        <th>Course Name</th>
        <th>Course Credit</th>
        <th>Course Price</th>
        <th></th>
        <th></th>
        </thead>
        <tbody>
        {{--            @foreach($institutions as $institution)--}}
        {{--                <tr>--}}
        {{--                    <td>{{$institution->id}}</td>--}}
        {{--                    <td>{{$institution->name}}</td>--}}
        {{--                    <td>{{$institution->description}}</td>--}}
        {{--                </tr>--}}
        {{--            @endforeach--}}
        </tbody>
    </table>
</div>

@endsection
