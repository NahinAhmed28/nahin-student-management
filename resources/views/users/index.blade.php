@extends('institutions.layouts.app')

@section('content')
    <table class="table mt-3">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>

            <th>Created at</th>
            <th scope="col">Action</th>


        </tr>
        </thead>
        <tbody>

        @foreach($users as $user)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>

                <td>{{ \Carbon\Carbon::parse($user->created_at)->diffForHumans() }}</td>

                <td>
                    <a href="{{ route('user.edit',[$user->id]) }}" title="View Student">
                        <button class="btn btn-warning btn-sm"><i class="fa fa-edit" aria-hidden="true"></i> Edit
                        </button></a>
                </td>

            </tr>
        @endforeach

        </tbody>
    </table>

@endsection
