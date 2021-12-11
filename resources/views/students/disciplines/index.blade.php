@extends('students.layouts.app')

@section('content')





    <h4>students Discipline List</h4>

    <div class="card-body table-full-width table-responsive">
        <table class="table table-hover table-striped">
            <thead class="badge-dark">
            <th>ID</th>
            <th>Discipline Name</th>
            </thead>
            <tbody>
            @foreach($disciplines as $discipline)
                <tr>
                    <td>{{$discipline->id}}</td>
                    <td>{{$discipline->name}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>



@endsection
