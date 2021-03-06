@extends('students.layouts.app')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title"> Profile</h4>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="row">
                                    <div class="col-md-3 px-1">
                                        <div class="form-group">
                                            <label>Username:</label>
                                            {{$user->name}}
                                            {{--                                            <input type="text" class="form-control" placeholder="Username" value=" {{ $user->name }}">--}}
                                        </div>
                                    </div>
                                    <div class="col-md-4 pl-1">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email address:</label>
                                            {{$user->email}}
                                            {{--                                            <input type="email" class="form-control" placeholder="{{$user->email}}" >--}}
                                        </div>
                                    </div>
                                    <div class="col-md-4 pl-1">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Institution:</label>
                                              {{$user->institution->name}}
                                            {{--                                            <input type="email" class="form-control" placeholder="{{$user->email}}" >--}}
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Address:</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 pr-1">
                                        <div class="form-group">
                                            <label>City:</label>
                                            Dhaka
                                        </div>
                                    </div>
                                    <div class="col-md-4 px-1">
                                        <div class="form-group">
                                            <label>Country</label>
                                            Bangladesh
                                            {{--                                            <input type="text" class="form-control" placeholder="Country" value="Bangladesh">--}}
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>About Me</label>
                                            <textarea rows="4" cols="80" class="form-control" placeholder="Here can be your description" value="Mike">institution manager</textarea>
                                        </div>
                                    </div>
                                </div>
                                {{--                                <button type="submit" class="btn btn-info btn-fill pull-right">Update Profile</button>--}}
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



