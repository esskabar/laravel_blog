@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <h2 class="border-bottom text-center">Standart Vue+laravel</h2>
        </div>
        <div class="col-sm-4">
            <h2 class="border-bottom text-center">ChartJS: Vue+Laravel</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <div class="btn-toolbar justify-content-center" role="toolbar" aria-label="Toolbar with button groups">
                <div class="btn-group mr2" role="group" aria-label="First group">
                    <a type="button" class="btn btn-secondary" href="#1">#1 Example component</a>
                    <a type="button" class="btn btn-secondary" href="#2">#2 Vue -> Blade</a>
                    <a type="button" class="btn btn-secondary" href="#3">#3 AJAX</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="btn-toolbar justify-content-center" role="toolbar" aria-label="Toolbar with button groups">
                <div class="btn-group mr2" role="group" aria-label="Second group">
                    <a type="button" class="btn btn-secondary" href="#4">Line</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="owl-carousel owl-theme mt-5">
                <div class="row m-2" data-hash="1">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="text-center" style="padding: 30px">
                                    #1 Example Component
                                </h2>
                                <example-component></example-component>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row m-2" data-hash="2">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="text-center" style="padding: 30px">
                                   Send data in Vue from Blade
                                </h2>
                                <prop-component :urldata="{{json_encode($url_data)}}"></prop-component>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row m-2" data-hash="3">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="text-center" style="padding: 30px">
                                    #3 Ajax
                                </h2>
                                <ajax-component :urldata="{{json_encode($url_data)}}"></ajax-component>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row m-2" data-hash="4">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body" style="min-height: 500px;">
                                <h2 class="text-center" style="padding: 30px">
                                   #4 ChartJS (Line) & VueJS *ajax
                                </h2>
                                <chartline-component></chartline-component>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection