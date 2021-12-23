@extends('institutions.layouts.app')

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
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Username</label>
                                            {{$user->name}}
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email address</label>
                                            {{$user->email}}
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Address</label>
{{--                                            <input type="text" class="form-control" placeholder="Home Address" value="Mirpur,Dhaka">--}}
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 px-1">
                                        <div class="form-group">
                                            <label>City</label>
                                            Dhaka
{{--                                            <input type="text" class="form-control" placeholder="City" value="{{$user->name}}">--}}
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
                <div class="col-md-4">
                    <div class="card card-user">
                        <div class="card-image">
                            <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="...">
                        </div>
                        <div class="card-body">
                            <div class="author">
                                <a href="#">
                                    <img class="avatar border-gray" src="https://cdn3.vectorstock.com/i/1000x1000/30/97/flat-business-man-user-profile-avatar-icon-vector-4333097.jpg" alt="...">
                                    <h5 class="title">Name: {{$user->name}}</h5>
                                </a>
                                <p class="description">
                                  Institution:  {{$user->institution->name}}
                                </p>
                            </div>
                            <p class="description text-center">
                               Institution Manager
                            </p>
                        </div>
                        <hr>
                        <div class="button-container mr-auto ml-auto">
                            <button href="#" class="btn btn-simple btn-link btn-icon">
                                <i class="fa fa-facebook-square"></i>
                            </button>
                            <button href="#" class="btn btn-simple btn-link btn-icon">
                                <i class="fa fa-twitter"></i>
                            </button>
                            <button href="#" class="btn btn-simple btn-link btn-icon">
                                <i class="fa fa-google-plus-square"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
