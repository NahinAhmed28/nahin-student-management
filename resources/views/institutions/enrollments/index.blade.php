@extends('institutions.layouts.app')
@section('content')

    <h4> Enrollment Application List</h4>
    <div class="card-body table-full-width table-responsive">
        <table class="table table-hover table-striped">
            <thead class="badge-dark">
            <th>ID</th>
            <th>Student Name</th>
            <th>Student Email</th>
            <th>Course Name</th>
            <th>Course Credit</th>
            <th>Course Price</th>
            <th>Institution</th>
            <th>Action</th>
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
                    <td>
                        <form method="POST" action="{{ route('enrollment.destroy' ,  [$enrollment->id]) }}" accept-charset="UTF-8" style="display:inline">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Contact"
{{--                                    onclick="return confirm(&quot;Confirm delete?&quot;)"--}}
                            ><i class="fa fa-trash-o" aria-hidden="true"></i> Decline</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
