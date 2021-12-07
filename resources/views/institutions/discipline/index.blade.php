@extends('institutions.layouts.app')

@section('content')

    <div class="col-md-6" style="display: block;margin: 0 auto;">
        <a class="btn btn-warning btn-fill btn-wd" href="{{route('discipline.create')}}" role="button">  Add New Discipline </a>
    </div>
    <h4> Discipline List</h4>

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
