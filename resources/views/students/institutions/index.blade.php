@extends('students.layouts.app')

@section('content')
    <h4> Institution List</h4>
    <div class="card-body table-full-width table-responsive">
        <table class="table table-hover table-striped">
            <thead class="badge-dark">
            <th>ID</th>
            <th>Institution Name</th>
            <th>Description</th>
            </thead>
            <tbody>
            @foreach($institutions as $institution)
                <tr>
                    <td>{{$institution->id}}</td>
                    <td>{{$institution->name}}</td>
                    <td>{{$institution->description}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
