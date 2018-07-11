@extends('admin.layouts.app_admin')

@section('content')
    <h1 style="text-align: center">Admin Panel</h1>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p><span class="label label-primary">Category 0</span></p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p><span class="label label-primary">Resources 0</span></p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p><span class="label label-primary">Members 0</span></p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p><span class="label label-primary">Guests 0</span></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <a class="btn btn-block btn-default" href="#">Create Category</a>
                <a class="list-group-item" href="#">
                    <h4 class="list-group-item-heading">First Category</h4>
                    <p class="list-group-item-text">Count Resources</p>
                </a>
            </div>
            <div class="col-sm-6">
                <a class="btn btn-block btn-default" href="#">Create Resource</a>
                <a class="list-group-item" href="#">
                    <h4 class="list-group-item-heading">Last Resources</h4>
                    <p class="list-group-item-text">Count Resources</p>
                </a>
            </div>
        </div>
    </div>
@endsection