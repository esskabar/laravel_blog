@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-4">
            <h2 class="border-bottom text-center">Standart Vue+laravel</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <div class="btn-toolbar justify-content-center" role="toolbar" aria-label="Toolbar with button groups">
                <div class="btn-group mr2"><a class="btn btn-secondary" href="#1">Example component</a></div>
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
                                <h2 class="text-center" style="min-height: 720px">
                                    #1 Example Component
                                </h2>
                                <example-component></example-component>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection